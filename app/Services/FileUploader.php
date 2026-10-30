<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploader
{
    public const IMAGE_RULES = ['image', 'mimes:jpg,jpeg,png,gif,webp', 'max:2048'];

    public const RESUME_RULES = ['file', 'mimes:pdf,doc,docx', 'max:5120'];

    public const PUBLIC_IMAGE_DIR = 'images/photos';

    public const RESUME_DIR = 'resumes';

    public static function storePublicImage(UploadedFile $file): string
    {
        $name = Str::random(40) . '.' . $file->extension();
        $file->move(public_path(self::PUBLIC_IMAGE_DIR), $name);

        return $name;
    }

    public static function storeResume(UploadedFile $file): string
    {
        return basename($file->store(self::RESUME_DIR, 'local'));
    }

    public static function resumePath(string $filename): ?string
    {
        $path = self::RESUME_DIR . '/' . basename($filename);

        return Storage::disk('local')->exists($path) ? $path : null;
    }
}

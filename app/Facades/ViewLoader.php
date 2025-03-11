<?php
namespace App\Facades;

class ViewLoader
{
    public static function render(string $view, array $data = []): string
    {
        $viewPath = __DIR__ . '/../../resources/views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            throw new \Exception("View not found: " . $view);
        }

        extract($data);

        ob_start();
        include $viewPath;
        return ob_get_clean();
    }
}
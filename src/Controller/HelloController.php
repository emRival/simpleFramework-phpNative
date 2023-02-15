<?php
//filename: src/Controller/HelloController.php
namespace ModernFramework\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function landing($nama)
    {
        return new Response("Hello Ini adalah halaman utama, Selamat datang $nama");
    }
    public function hello()
    {
        return new Response('Hello World');
    }
    public function greet($nama)
    {
        return new Response(sprintf('Selamat Datang, %s', $nama));
    }
}
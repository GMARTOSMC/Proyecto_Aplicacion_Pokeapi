<?php

declare(strict_types=1); // <- a nivel de archivo y arriba del todo

function render_template(string $template, array $data = [])
{
  extract($data);
  require "templates/$template.php";
}

function get_data(string $url): array
{
  $result = file_get_contents($url); // si solo quieres hacer un GET de una API
  $data = json_decode($result, true);
  return $data;
}
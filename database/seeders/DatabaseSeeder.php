<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      PerfilSeeder::class,
      ModuloSeeder::class,
      PerfilsModulosSeeder::class,
      UsersSeeder::class,
      CategoriaSeeder::class,
      ProductoSeeder::class,
      ClienteSeeder::class,
      TipoDocumentoSeeder::class,
    ]);
  }
}

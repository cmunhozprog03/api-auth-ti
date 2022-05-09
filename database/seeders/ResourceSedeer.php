<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Resource::create(['name' => 'Categorias']);
        $category->permissions()->create(['name' => 'visualizar_categorias']);
        $category->permissions()->create(['name' => 'criar_categoria']);
        $category->permissions()->create(['name' => 'editar_categoria']);
        $category->permissions()->create(['name' => 'deletar_categoria']);

        $company = Resource::create(['name' => 'Empresas']);
        $company->permissions()->create(['name' => 'visualizar_empresas']);
        $company->permissions()->create(['name' => 'criar_empresa']);
        $company->permissions()->create(['name' => 'editar_empresa']);
        $company->permissions()->create(['name' => 'deletar_empresa']);
    }
}

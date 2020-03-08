<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('projects')->insert([
            'name' => 'Las normas que nos norman',
            'created_at' => now(),
            'main_picture' => 'normas.png',
            'description' => 'Las Normas Que Nos Norman es una plataforma de información virtual que busca promover y difundir los marcos legales para situaciones cotidianas. Es una forma de  aprehender colectivamente sobre el ejercicio y exigibilidad de derechos y responsabilidades frente al Estado y las empresas.'
        ]);

        DB::table('projects')->insert([
            'name' => 'LabJujuy',
            'created_at' => now(),
            'main_picture' => 'lab.png',
            'description' => 'LabJujuy es una interfaz de innovación ciudadana, es decir de nuevas formas de participación en las que integrantes de la comunidad son responsables de aportar a identificar problemas y soluciones que mejoren sus experiencias, calidad de vida y formas de habitar la ciudad. Esto supone entonces, que los ciudadanos dejan de ser receptores pasivos de acciones institucionales, para pasar a convertirse en protagonistas y productores de la resolución de sus propias problemáticas. <br>
            Tres características principales serán transversales a LabJujuy: apertura, trabajo colaborativo y experimentación. A su vez la matriz metodológica estará basada en la investigación-acción participativa.'
        ]);

        DB::table('projects')->insert([
            'name' => 'Cultivar',
            'created_at' => now(),
            'main_picture' => 'cultivar.png',
            'description' => 'Cultivar es un programa de formación e investigación. Buscamos a través de él, contribuir al desarrollo de las organizaciones sociales, la responsabilidad social y la sociedad civil mediante herramientas, actividades y acciones que permitan aumentar su compromiso, capacidades, sustentabilidad e impacto social. <br>
            Para ello proponemos desplegar una serie de propuestas educativas, asesoramiento y consultorías para la orientacion y difusion de conocimientos relevantes.'
        ]);
    }
}

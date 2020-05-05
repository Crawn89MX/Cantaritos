<?php

use Illuminate\Database\Seeder;
use App\Receta;

class RecetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Receta::create([
            'Imagen'=>'birria.jpg',
            'Nombre'=>'Birria',
            'Descripcion'=>'Plato a base de carne de borrego, adobado con una preparación a base de algunos tipos de chiles, condimentos y sal.',
            'Costo'=>'25',
            'Ingredientes'=>'{"1 Kilo de Rabo/Cola de res de RUMBA MEATS",
                "1 Kilo de Cachete de res o pulpa de res",
                "Sal y pimienta al gusto","3 Chiles Ancho",
                "6 Chiles Guajillo","2 Jitomates grandes asados",
                "1/2 Cucharadita de semillas de comino",
                "1/2 cucharadita de granos de pimienta negra",
                "4 Clavos","1/2 cucharadita de mejorana",
                "1 pulgada de astilla de canela mexicana",
                "1/2 taza de vinagre blanco"}',
            'Preparacion'=>'{"Sazona la carne con sal y pimienta, y colócala en un plato grande para hornear.",
                "Limpia y retira las semillas de los chiles, ásalos ligeramente a fuego medio, asegurándote de no quemarlos (los chiles quemados hacen que el plato tenga un sabor amargo). Remoja los chiles en una taza de agua caliente durante 20 minutos. Asar la cebolla y el ajo y colócalos en tu licuadora.",
                "Lleva a tostar el clavo, las semillas de comino y los granos de pimienta negra (este es un paso rápido que sólo toma unos segundos). Colócalos en tu licuadora junto con los tomates asados, las hierbas, la cebolla, la canela y el vinagre.",
                "Una vez que los chiles estén blandos, escúrralos, añádalos a la licuadora y licúa hasta que tengas una salsa suave. Agrega unas cuantas cucharadas de agua sólo si tu licuadora está teniendo dificultades para procesar la mezcla; sazona la salsa con sal.",
                "Vierta la salsa sobre la carne, asegurándote de que esté cubierta por completo con la salsa, cubra el plato de hornear con papel de aluminio y refrigera durante la noche o por lo menos con 4 horas de antelación, para permitir que toda la carne absorba los sabores.",
                "Precaliente el horno a 350 º F. Hornea la carne durante unas 4 horas o hasta que esté tierna.",
                "Sirva la carne caliente con su caldo en tazones y decora con cebolla picada y cilantro. Puedes acompañar con tortillas calientes y una salsa picante.}',
            'Condimentos_Alternativos'=>'{"1/2 cebolla blanca mediana cortada en rodajas","1 cucharadita de orégano mexicano","4 dientes de ajo enteros"}'
        ]);
        
        Receta::create([
            'Imagen'=>'quesadillas.jpg',
            'Nombre'=>'Quesadillas',
            'Descripcion'=>'Tortilla fundida con queso en su interior',
            'Costo'=>'15',
            'Ingredientes'=>'{"1 Tortilla",
                "1 cuarto de queso"}',
            'Preparacion'=>'{"Sazona la carne con sal y pimienta, y colócala en un plato grande para hornear.",
                "Limpia y retira las semillas de los chiles, ásalos ligeramente a fuego medio, asegurándote de no quemarlos (los chiles quemados hacen que el plato tenga un sabor amargo). Remoja los chiles en una taza de agua caliente durante 20 minutos. Asar la cebolla y el ajo y colócalos en tu licuadora.",
                "Lleva a tostar el clavo, las semillas de comino y los granos de pimienta negra (este es un paso rápido que sólo toma unos segundos). Colócalos en tu licuadora junto con los tomates asados, las hierbas, la cebolla, la canela y el vinagre.",
                "Una vez que los chiles estén blandos, escúrralos, añádalos a la licuadora y licúa hasta que tengas una salsa suave. Agrega unas cuantas cucharadas de agua sólo si tu licuadora está teniendo dificultades para procesar la mezcla; sazona la salsa con sal.",
                "Vierta la salsa sobre la carne, asegurándote de que esté cubierta por completo con la salsa, cubra el plato de hornear con papel de aluminio y refrigera durante la noche o por lo menos con 4 horas de antelación, para permitir que toda la carne absorba los sabores.",
                "Precaliente el horno a 350 º F. Hornea la carne durante unas 4 horas o hasta que esté tierna.",
                "Sirva la carne caliente con su caldo en tazones y decora con cebolla picada y cilantro. Puedes acompañar con tortillas calientes y una salsa picante.}',
            'Condimentos_Alternativos'=>'{"1/2 de chicharron",
                "1/2 de pierna"}'
        ]);

    }
}

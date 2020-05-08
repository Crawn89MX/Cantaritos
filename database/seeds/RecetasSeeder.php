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
            'Imagen'=>'chiles.jpg',
            'Nombre'=>'Birria',
            'Descripcion'=>'Plato a base de carne de borrego, adobado con una preparacion a base de algunos tipos de chiles, condimentos y sal.',
            'Costo'=>'25',
            'Clasificacion'=>'Plato Fuerte',
            'Ingredientes'=>'{"1 Kilo de Rabo/Cola de res de RUMBA MEATS",
                "1 Kilo de Cachete de res o pulpa de res",
                "Sal y pimienta al gusto","3 Chiles Ancho",
                "6 Chiles Guajillo","2 Jitomates grandes asados",
                "1/2 Cucharadita de semillas de comino",
                "1/2 cucharadita de granos de pimienta negra",
                "4 Clavos","1/2 cucharadita de mejorana",
                "1 pulgada de astilla de canela mexicana",
                "1/2 taza de vinagre blanco"}',
            'Preparacion'=>'{"Sazona la carne con sal y pimienta, y colocala en un plato grande para hornear.",
                "Limpia y retira las semillas de los chiles, asalos ligeramente a fuego medio, asegurandote de no quemarlos (los chiles quemados hacen que el plato tenga un sabor amargo). Remoja los chiles en una taza de agua caliente durante 20 minutos. Asar la cebolla y el ajo y colocalos en tu licuadora.",
                "Lleva a tostar el clavo, las semillas de comino y los granos de pimienta negra (este es un paso rapido que solo toma unos segundos). Colocalos en tu licuadora junto con los tomates asados, las hierbas, la cebolla, la canela y el vinagre.",
                "Una vez que los chiles esten blandos, escurralos, añadalos a la licuadora y licua hasta que tengas una salsa suave. Agrega unas cuantas cucharadas de agua solo si tu licuadora esta teniendo dificultades para procesar la mezcla; sazona la salsa con sal.",
                "Vierta la salsa sobre la carne, asegurandote de que este cubierta por completo con la salsa, cubra el plato de hornear con papel de aluminio y refrigera durante la noche o por lo menos con 4 horas de antelacion, para permitir que toda la carne absorba los sabores.",
                "Precaliente el horno a 350 º F. Hornea la carne durante unas 4 horas o hasta que este tierna.",
                "Sirva la carne caliente con su caldo en tazones y decora con cebolla picada y cilantro. Puedes acompañar con tortillas calientes y una salsa picante."}',
            'Condimentos_Alternativos'=>'{"1/2 cebolla blanca mediana cortada en rodajas","1 cucharadita de oregano mexicano","4 dientes de ajo enteros"}'
        ]);
        
        Receta::create([
            'Imagen'=>'quesadilla.jpg',
            'Nombre'=>'Quesadillas',
            'Descripcion'=>'Tortilla fundida con queso en su interior',
            'Costo'=>'15',
            'Clasificacion'=>'Platillo principal',
            'Ingredientes'=>'{"1 Tortilla",
                "1 cuarto de queso"}',
            'Preparacion'=>'{"Sazona la carne con sal y pimienta, y colocala en un plato grande para hornear.",
                "Limpia y retira las semillas de los chiles, asalos ligeramente a fuego medio, asegurandote de no quemarlos (los chiles quemados hacen que el plato tenga un sabor amargo). Remoja los chiles en una taza de agua caliente durante 20 minutos. Asar la cebolla y el ajo y colocalos en tu licuadora.",
                "Lleva a tostar el clavo, las semillas de comino y los granos de pimienta negra (este es un paso rapido que solo toma unos segundos). Colocalos en tu licuadora junto con los tomates asados, las hierbas, la cebolla, la canela y el vinagre.",
                "Una vez que los chiles esten blandos, escurralos, añadalos a la licuadora y licua hasta que tengas una salsa suave. Agrega unas cuantas cucharadas de agua solo si tu licuadora esta teniendo dificultades para procesar la mezcla; sazona la salsa con sal.",
                "Vierta la salsa sobre la carne, asegurandote de que este cubierta por completo con la salsa, cubra el plato de hornear con papel de aluminio y refrigera durante la noche o por lo menos con 4 horas de antelacion, para permitir que toda la carne absorba los sabores.",
                "Precaliente el horno a 350 º F. Hornea la carne durante unas 4 horas o hasta que este tierna.",
                "Sirva la carne caliente con su caldo en tazones y decora con cebolla picada y cilantro. Puedes acompañar con tortillas calientes y una salsa picante."}',
            'Condimentos_Alternativos'=>'{"1/2 de chicharron",
                "1/2 de pierna"}'
        ]);


        Receta::create([
            'Imagen'=>'torta.jpg',
            'Nombre'=>'Torta ahogada',
            'Descripcion'=>'Pan de birote bañado en salsa se tomate y relleno de carnes',
            'Costo'=>'32',
            'Clasificacion'=>'Platillo principal',
            'Ingredientes'=>'{"100 g de chile de arbol seco, sin rabos, venas ni semillas",
                "2 cucharadas de ajonjoli tostado",
                "2 cucharadas de vinagre blanco",
                "1 pizca de comino",
                "1 pizca de mejorana seca molida",
                "sal al gusto",
                "8 jitomates cocidos",
                "1/2 cebolla"
                "1 cucharadita de oregano seco",
                "1 hoja de laurel",
                "1 pizca de comino",
                "sal al gusto",
                "8 birotes",
                "1 taza de frijoles refritos 800 g de carnitas picadas"}',
            'Preparacion'=>'{"Coloque los chiles en una olla y cubralos con agua; hiervalos por 10 minutos, escurralos y licuelos con el ajo, el ajonjoli, el vinagre, el comino y la mejorana. Hierva la salsa y añada la sal al gusto.",
                "Licue todos los ingredientes, cuelelos y hiervalos durante 8 minutos. Rec­tifique de sal y reserve.",
                "Corte los birotes por la mitad horizontalmente, retireles un poco de migajon y unte ambas mitades con los frijoles; agregue las carnitas y cierrelos. Sumerja cada torta en la salsa de jitomate y acompañe con la salsa picante al gusto."}',
            'Condimentos_Alternativos'=>'{"4 dientes de ajo",
                "3 clavos de olor"}'
        ]);

        Receta::create([
            'Imagen'=>'enchiladas.jpg',
            'Nombre'=>'Enchiladas',
            'Descripcion'=>'Tortilla de maiz bañada en alguna salsa picante utilizando chile en su preparacion.',
            'Costo'=>'40',
            'Clasificacion'=>'Plato Fuerte',
            'Ingredientes'=>'{"4 chiles guajillo abiertos, limpios y sin semillas.",
                "4 chiles anchos abiertos, limpios y sin semillas.",
                "2 dientes de ajo picados",
                "1/4 cucharadita de oregano seco mexicano",
                "Sal y pimienta al gusto",
                "12 tortillas de maiz",
                "2 tazas de carne deshebrada de cerdo o pollo opcional",
                "1 1/2 taza de queso fresco desmoronado",
                "1/2 taza de cebolla blanca finamente picada",
                "1/3 de taza de aceite vegetal"}',
            'Preparacion'=>'{"Vamos a empezar con la salsa: Tuesta ligeramente los chiles en un comal caliente, presionándolos con la ayuda de una espátula, pero asegurándote de no quemarlos. (Este paso toma sólo unos segundos en cada lado).",
                "Una vez asados los chiles colócalos en una cacerola con agua y cocínalos a fuego lento durante 15 minutos, o hasta que estén blandos.",
                "Retira la olla del fuego y deja enfriar los chiles durante 10 o 15 minutos. (Recuerda que éstos deben estar suaves y blandos).",
                "Después de que los chiles se hayan enfriado, escúrrelos y colócalos en la licuadora junto con los dientes de ajo; añade ½ taza de agua limpia y licua hasta obtener una salsa suave. (Si la salsa está muy espesa o no se molieron bien los chiles, es necesario pasarla por un colador fino). Sazona con el orégano, la sal y la pimienta.",
                "Precalienta el horno a 350oF (180oC) para mantener las enchiladas calientes mientras terminas de ensamblarlas.",
                "En un sartén grande agrega las 2 cucharadas de aceite vegetal y caliéntalo a fuego medio. (Ve añadiendo el aceite poco a poco — según sea necesario — mientras fríes las tortillas, ya que si lo agregas todo a la vez las tortillas lo absorberán y se romperán).",
                "Sumerge las tortillas — una a una — en la salsa hasta que ambos lados se mojen bien.",
                "Después coloca la tortilla en el sartén con el aceite caliente y fríe por ambos lados. (Esto sólo tarda unos segundos). Coloca la enchilada en un plato. Agrega más aceite al sartén conforme se necesite y continúa con el proceso de freír las tortillas: primero las pasas por la salsa y después por el aceite. Coloca dentro del horno precalentado el plato donde estás poniendo las enchiladas para mantenerlas calientes mientras terminas de freír el resto de las tortillas.",
                "Para servir las enchiladas, primero coloca el relleno de tu elección en el centro de la tortilla y luego dóblala o enróllala como se observa en la foto de arriba.",
                "Espolvorea las enchiladas con el queso y la cebolla; agrega cualquier otra guarnición"}',
            'Condimentos_Alternativos'=>'{"2 tazas de papas precocidas y partidas en cubos",
                "2 tazas de zanahorias precocidas y partidas en cubos",
                "Lechuga o repollo",
                "Rabanos"}'
        ]);

        Receta::create([
            'Imagen'=>'pozole.jpg',
            'Nombre'=>'Pozole',
            'Descripcion'=>'plato tradicional, un caldo hecho a base de granos de maíz, según la región se le agrega, carne de pollo o de cerdo como ingrediente secundario.​',
            'Costo'=>'31',
            'Clasificacion'=>'Plato Fuerte',
            'Ingredientes'=>'{"4 litros de agua",
                "1 kilo de carne de puerco cortada en cubos",
                "1/2 kilo de costilla de puerco cortada en trozos",
                "3 latas de maíz para pozole enjuagado y escurrido (425 gramos c/u).",
                "1 cebolla blanca cortada en cuatro partes",
                "8 dientes de ajo grandes",
                "Sal para sazonar al gusto",
                "5 chiles anchos limpios sin semillas y desvenados.",
                "5 chiles guajillo limpios sin semillas y desvenados.",
                "6 dientes de ajo",
                "1/2 cebolla mediana picadita.",
                "2 cucharadas soperas de aceite vegetal",
                "1/2 cucharadita cafetera de orégano mexicano",
                "Sal al gusto para sazonar",
                "1 lechuga finamente picada",
                "1/2 taza de cebolla blanca finamente picada",
                "1/2 taza de rábanos finamente rebanados",
                "Chile piquín recién molido al gusto",
                "Orégano mexicano al gusto para sazonar",
                "Tortillas doradas ó tostadas de paquete 2–3 por persona",
                "Limones cortados en cuartos"}',
            'Preparacion'=>'{"Pon el agua a calentar en una olla grande. Agrega la cebolla, el ajo, la sal, la carne y las costillas. Deja que suelte el hervor y después baja la flama para que se cocine la carne por aproximadamente 2 horas y media, o hasta que ésta se despegue del hueso.",
                "Mientras se cuece la carne, remueve con un cucharón la capa de espuma y grasa que se vaya formando en la superficie del caldo. Si es necesario agrega más agua caliente para mantener el mismo nivel de caldo en la olla.",
                "Cuando la carne se cueza, sepárala del caldo. Quítale al caldo el exceso de grasa, los huesos de las costillas, la cebolla y el ajo.",
                "Para preparar la salsa, remoja los chiles anchos y guajillo durante 25 minutos en suficiente agua que los cubra.",
                "Una vez que los chiles estén blandos, escúrrelos y colócalos en la licuadora junto con el ajo, la cebolla y el orégano, agregando un poco del agua donde se remojaron éstos. Licua hasta que tenga la consistencia de una salsa suave.",
                "Calienta el aceite en un sartén a temperatura media alta; agrega la salsa, y sazona con sal al gusto. (Revuelve constantemente, ya que tiende a brincar). Reduce la flama y hierve a fuego lento por aprox. 25 minutos.",
                "Agrega la salsa al caldo pasándola primero por un colador. Deja que suelte el hervor y agrega la carne. Hierve a fuego bajo por aprox. 10 minutos. Agrega el maíz y sazona con sal y pimienta. Sigue cocinando hasta que se caliente completamente.",
                "Sirve el pozole en plato hondo y coloca la guarnición a un lado como se muestra en la foto."}',
            'Condimentos_Alternativos'=>'{"Aguacate cortado en cubos"}'
        ]);


        


        /*
           

        <div class="row form-group">
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/chiles.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Chiles rellenos</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/pollo.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Pollo con mole</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
                        </div>
                    </div>
              </div>
            </div>
            

        <!--Postres-->
        <CENTER>
        <div class="subtitulo">
            <h3>Postres</h3>
            <br>
        </div>
        </CENTER>

        <div class="row form-group">
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/jericalla.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Jericalla</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/chongos.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Chongos zamoranos</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/flan.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Flan napolitano</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/pay.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Pay de queso</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
                        </div>
                    </div>
              </div>
            </div>
            <br><br>
        </div>

        <!--Bebidas-->
        <CENTER>
        <div class="subtitulo">
            <h3>Bebidas</h3>
            <br>
        </div>
        </CENTER>

        <div class="row form-group">
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/refresco.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Refresco</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$45</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/jugos.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Jugo natural</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$50</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/licuados.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Licuado</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
                        </div>
                    </div>
              </div>
            </div>
            <div class="card" style="width: 200px; margin-left: 2.2% !important;">
              <img class="card-img-top" width="350" height="200" src="img/te.jpg" alt="Card image">
              <div class="card-body" style="padding: 5px !important;">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-9">
                            <h5 class="card-title" style="margin-bottom: 0px !important;">Te</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title" style="margin-bottom: 0px !important; width: 150px !important; margin-left: -20px !important;">$40</h5>
                        </div>
                    </div>
              </div>
            </div>
        </div>
        <br> 

        <!--Boton
        <div class="col-md-12">
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        <b>Generar</b>
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </div> */

    }
}

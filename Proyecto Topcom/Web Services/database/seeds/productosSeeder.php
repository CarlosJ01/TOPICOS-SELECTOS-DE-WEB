<?php

use App\Articulo;

use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /* Monitores */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR GAMER AORUS KD25F 24.5"';
        $nuevoProducto->descripcion = '1920 x 1080 Pixeles, Tipo HD: Full HD, Tecnología de visualización: LED, Superficie de la pantalla: Mate, Tiempo de respuesta: 0.5 ms, Relación de aspecto nativa: 16:9, Ángulo de visión, horizontal: 170°, Ángulo de visión, vertical: 160°.';
        $nuevoProducto->precio = '11,159.20';
        $nuevoProducto->imagen = '/img/productos/monitores/07.jpg';
        $nuevoProducto->stock = 33;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR LED AOC 19 PULGADAS (18.5")';
        $nuevoProducto->descripcion = 'Esta compacta pantalla de 18,5" ofrece un buen rendimiento para los usuarios domésticos. También les ayuda a ahorrar con su bajo consumo de energía, y ofrece opciones de inclinación e instalación en pared.';
        $nuevoProducto->precio = '1,248.16';
        $nuevoProducto->imagen = '/img/productos/monitores/01.jpg';
        $nuevoProducto->stock = 26;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR LED ASUS VA24EHEY 24 PULGADAS (23.8")';
        $nuevoProducto->descripcion = 'ASUS VA24EHEY. Diagonal de la pantalla: 60.5 cm (23.8"), Resolución de la pantalla: 1920 x 1080 Pixeles, Tipo HD: Full HD, Tecnología de visualización: LED, Superficie de la pantalla: Mate, Relación de aspecto nativa: 16:9, Ángulo de visión, horizontal: 178°, Ángulo de visión, vertical: 178°. montaje VESA. Certificado Energy Star, Color del producto: Negro';
        $nuevoProducto->precio = '2,800.24';
        $nuevoProducto->imagen = '/img/productos/monitores/02.jpg';
        $nuevoProducto->stock = 136;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR LED HP 5RD65A8 20 PULGADAS (19.5°)';
        $nuevoProducto->descripcion = 'HP P204. Diagonal de la pantalla: 49.5 cm (19.5"), Resolución de la pantalla: 1600 x 900 Pixeles, Tipo HD: HD+, Tiempo de respuesta: 5 ms, Relación de aspecto nativa: 16:9, Ángulo de visión, horizontal: 170°, Ángulo de visión, vertical: 160°. montaje VESA, Ajustes de altura. Color del producto: Negro';
        $nuevoProducto->precio = '1,400.12';
        $nuevoProducto->imagen = '/img/productos/monitores/03.jpg';
        $nuevoProducto->stock = 406;
        $nuevoProducto->save();
        
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR LED VORAGO LED-W23.6-302 24"';
        $nuevoProducto->descripcion = 'MONITOR LED VORAGO LED-W23.6-302 24 PULGADAS (23.6") FULLHD HDMI VGA';
        $nuevoProducto->precio = '2,299.12';
        $nuevoProducto->imagen = '/img/productos/monitores/04.jpg';
        $nuevoProducto->stock = 80;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR QIAN 21.5"';
        $nuevoProducto->descripcion = 'Qian QM2150F. Diagonal de la pantalla: 54.6 cm (21.5"), Resolución de la pantalla: 1920 x 1080 Pixeles, Tipo HD: Full HD, Tecnología de visualización: LED, Tiempo de respuesta: 5 ms, Ángulo de visión, horizontal: 90°, Ángulo de visión, vertical: 65°. montaje VESA. Color del producto: Negro';
        $nuevoProducto->precio = '2,098.44';
        $nuevoProducto->imagen = '/img/productos/monitores/05.jpg';
        $nuevoProducto->stock = 88;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MONITOR GAMER GAME FACTOR MG500 23.6"';
        $nuevoProducto->descripcion = 'Máximo detalle aún en las situaciones mas movidas. Gracias a su refresco de 144Hz, siempre podrás captar hasta el mas mínimo detalle. El monitor MG500 te dá la ventaja en el campo de batalla';
        $nuevoProducto->precio = '4,000.84';
        $nuevoProducto->imagen = '/img/productos/monitores/06.jpg';
        $nuevoProducto->stock = 17;
        $nuevoProducto->save();

        /* Memorias */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'UNIDAD SSD M.2 NVMe ADATA XPG SPECTRIX 256GB';
        $nuevoProducto->descripcion = 'XPG Spectrix S40G. SDD, capacidad: 256 GB, Factor de formato SSD: M.2, Velocidad de lectura: 3500 MB/s, Velocidad de escritura: 1200 MB/s, Componente para: PC';
        $nuevoProducto->precio = '1,398.96';
        $nuevoProducto->imagen = '/img/productos/memorias/01.jpg';
        $nuevoProducto->stock = 13;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'UNIDAD SSD M.2 ADATA XPG 256GB';
        $nuevoProducto->descripcion = 'XPG GAMMIX S11 Pro. SDD, capacidad: 256 GB, Factor de formato SSD: M.2, Velocidad de lectura: 3350 MB/s, Velocidad de escritura: 1150 MB/s, Componente para: PC';
        $nuevoProducto->precio = '1,498.72';
        $nuevoProducto->imagen = '/img/productos/memorias/02.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'DISCO DURO INTERNO WD 4TB 3.5';
        $nuevoProducto->descripcion = 'Western Digital Purple. Tamaño del HDD: 3.5", Capacidad del HDD: 4000 GB, Velocidad de rotación del HDD: 5400 RPM';
        $nuevoProducto->precio = '2,311.88';
        $nuevoProducto->imagen = '/img/productos/memorias/03.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'DISCO DURO INTERNO SEAGATE BARRACUDA 4TB';
        $nuevoProducto->descripcion = 'Seagate Barracuda ST4000DM004. Tamaño del HDD: 3.5", Capacidad del HDD: 4000 GB, Velocidad de rotación del HDD: 5400 RPM';
        $nuevoProducto->precio = '2,162.24';
        $nuevoProducto->imagen = '/img/productos/memorias/04.jpg';
        $nuevoProducto->stock = 152;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'UNIDAD SSD ADATA SU650 960GB SATA III 2.5"';
        $nuevoProducto->descripcion = 'ADATA SU650. SDD, capacidad: 960 GB, Factor de formato SSD: 2.5", Velocidad de lectura: 520 MB/s, Velocidad de escritura: 450 MB/s, Velocidad de transferencia de datos: 6 Gbit/s, Componente para: PC/computadora portátil';
        $nuevoProducto->precio = '2,614.64';
        $nuevoProducto->imagen = '/img/productos/memorias/05.jpg';
        $nuevoProducto->stock = 12;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'SSD KINGSTON KC600 2TB SATA 2.5';
        $nuevoProducto->descripcion = 'El KC600 de Kingston es una unidad SSD de máxima capacidad diseñada para ofrecer un rendimiento excelente y optimizada para aportar una capacidad de respuesta funcional del sistema con increíbles tiempos de arranque, carga y transferencia.';
        $nuevoProducto->precio = '7,260.44';
        $nuevoProducto->imagen = '/img/productos/memorias/06.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MEMORIA RAM KINGSTON HYPERX FURY BLACK 4GB DDR4';
        $nuevoProducto->descripcion = 'HyperX® FURY DDR4 impulsa enormemente el rendimiento de juegos, edición de vídeo y renderización con velocidades de hasta 3733 MHz.';
        $nuevoProducto->precio = '548.68';
        $nuevoProducto->imagen = '/img/productos/memorias/07.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MEMORIA RAM DELL 16GB 2933MH';
        $nuevoProducto->descripcion = 'DELL AA579532. Componente para: PC/servidor, Memoria interna: 16 GB, Tipo de memoria interna: DDR4, Velocidad de memoria del reloj: 2933 MHz, Factor de forma de memoria: RDIMM';
        $nuevoProducto->precio = '8,543.40';
        $nuevoProducto->imagen = '/img/productos/memorias/08.jpg';
        $nuevoProducto->stock = 13;
        $nuevoProducto->save();

        /* Procesadores y Graficas */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'PROCESADOR AMD RYZEN 7 3700X 4.4 GHz';
        $nuevoProducto->descripcion = 'AMD Ryzen 7 3700X. Familia de procesador: AMD Ryzen 7, Frecuencia del procesador: 3.6 GHz, Socket de procesador: Enchufe AM4. Canales de memoria: Dual-channel, Tipos de memoria soportados por el procesador: DDR4-SDRAM, Velocidades de memoria del reloj soportadas por el procesador: 3200 MHz.';
        $nuevoProducto->precio = '7,398.48';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/01.jpg';
        $nuevoProducto->stock = 3;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'PROCESADOR AMD RYZEN 5 2600';
        $nuevoProducto->descripcion = 'Frecuencia del procesador: 3.4 GHz, Socket de procesador: Enchufe AM4. Canales de memoria: Dual-channel, Tipos de memoria soportados por el procesador: DDR4-SDRAM, Velocidades de memoria del reloj soportadas por el procesador: 2933 MHz. Potencia de diseño térmico (TDP): 65 W. Configuraciones PCI Express: 1x16';
        $nuevoProducto->precio = '3,192.32';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/02.jpg';
        $nuevoProducto->stock = 4;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'PROCESADOR INTEL CORE i3 7350K 4.2GHz';
        $nuevoProducto->descripcion = 'PROCESADOR INTEL CORE i3 7350K 4.2GHz 60W SOC 1151 SIN DISIPADOR';
        $nuevoProducto->precio = '2,998.60';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/03.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'PROCESADOR INTEL CORE I9-9900K OCTAC 3.6GHZ';
        $nuevoProducto->descripcion = 'Frecuencia del procesador: 3.6 GHz, Socket de procesador: LGA 1151 (Zócalo H4). Canales de memoria: Dual-channel, Máxima memoria interna soportada por el procesador: 64 GB, Tipos de memoria soportados por el procesador: DDR4-SDRAM. Modelo de gráficos en tarjeta: Intel® UHD Graphics 630';
        $nuevoProducto->precio = '12,998.96';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/04.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA DE VIDEO ASUS ROG-STRIX-RXVEGA64';
        $nuevoProducto->descripcion = 'Procesador gráfico: Radeon RX Vega 64, Frecuencia del procesador: 1298 MHz. Capacidad memoria de adaptador gráfico: 8 GB, Bus de memoria: 2048 Bit, Velocidad de memoria del reloj: 945 MHz. Máxima resolución: 7680 x 4320 Pixeles. Versión OpenGL: 4.5. Tipo de interfaz: PCI Express 3.0.';
        $nuevoProducto->precio = '20,396.28';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/05.jpg';
        $nuevoProducto->stock = 2;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA DE VIDEO MSI NVIDIA GEFORCE GTX 1650';
        $nuevoProducto->descripcion = 'Procesador gráfico: GeForce GTX 1650 SUPER. Capacidad memoria de adaptador gráfico: 4 GB, Tipo de memoria de adaptador gráfico: GDDR6, Bus de memoria: 128 Bit. Máxima resolución: 7680 x 4320 Pixeles. Versión DirectX: 12.0, Versión OpenGL: 4.6. Tipo de interfaz: PCI Express x16 3.0';
        $nuevoProducto->precio = '5,699.08';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/06.jpg';
        $nuevoProducto->stock = 5;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA DE VIDEO GIGABYTE GEFORCE RTX 2080Ti 11GB';
        $nuevoProducto->descripcion = 'TARJETA DE VIDEO GIGABYTE GEFORCE RTX 2080Ti 11GB GDDR6 GV-N208TGAMING';
        $nuevoProducto->precio = '31,521.84';
        $nuevoProducto->imagen = '/img/productos/procesadoresGraficas/07.jpg';
        $nuevoProducto->stock = 8;
        $nuevoProducto->save();

        /* Perifericos */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MOUSE GAMER THERMALTAKE TT ESPORTS IRIS OPTICAL USB';
        $nuevoProducto->descripcion = 'MOUSE GAMER THERMALTAKE TT ESPORTS IRIS OPTICAL USB RGB MO-IRS-WDOHBK';
        $nuevoProducto->precio = '757.48';
        $nuevoProducto->imagen = '/img/productos/perifericos/01.jpg';
        $nuevoProducto->stock = 82;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MOUSE LOGITECH GAMING G603 INALAMBRICO';
        $nuevoProducto->descripcion = 'MOUSE LOGITECH GAMING G603 INALAMBRICO LIGHTSPEED 910-005100';
        $nuevoProducto->precio = '998.76';
        $nuevoProducto->imagen = '/img/productos/perifericos/02.jpg';
        $nuevoProducto->stock = 4;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'DIADEMA GAMER EDIFIER G20 USB';
        $nuevoProducto->descripcion = 'DIADEMA GAMER EDIFIER G20 USB / SONIDO 7.1/ 400HMS / 20KHZ';
        $nuevoProducto->precio = '2,320.00';
        $nuevoProducto->imagen = '/img/productos/perifericos/03.jpg';
        $nuevoProducto->stock = 7;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'DIADEMA GAMER EDIFIER G4 LED, USB';
        $nuevoProducto->descripcion = 'DIADEMA GAMER EDIFIER G4 LED, USB / SONIDO 7.1/ 24 0HMS / 20KHZ';
        $nuevoProducto->precio = '3,480.00';
        $nuevoProducto->imagen = '/img/productos/perifericos/04.jpg';
        $nuevoProducto->stock = 2;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MOUSE LOGITECH G403 HERO NEGRO 6 BOTONES';
        $nuevoProducto->descripcion = 'G403 hace su aparición con el sensor HERO 16K de próxima generación. Prepárate para un mouse con seguimiento 1:1 de próximo nivel, rango de sensibilidad máxima de 100-16.000 dpi y sin suavizado, aceleración ni filtros.';
        $nuevoProducto->precio = '648.44';
        $nuevoProducto->imagen = '/img/productos/perifericos/05.jpg';
        $nuevoProducto->stock = 4;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MOUSE ASUS P303 ROG STRIX IMPACT 4 BOTONES';
        $nuevoProducto->descripcion = 'MOUSE ASUS P303 ROG STRIX IMPACT 4 BOTONES 5000DPI';
        $nuevoProducto->precio = '439.64';
        $nuevoProducto->imagen = '/img/productos/perifericos/06.png';
        $nuevoProducto->stock = 9;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TECLADO GAMER DELL ALIENWARE AW768';
        $nuevoProducto->descripcion = 'DELL AW768. Formato del teclado: Estándar. Estilo de teclado: Derecho. Tecnología de conectividad: Alámbrico, Interfaz del dispositivo: USB, Interruptor del teclado: Interruptor mecánico, Diseño de teclado: QWERTY. Tipo de retroiluminación: LED. Longitud de cable: 1.82 m. Uso recomendado: Juego. Color del producto: Negro, Plata';
        $nuevoProducto->precio = '2,442.96';
        $nuevoProducto->imagen = '/img/productos/perifericos/07.jpg';
        $nuevoProducto->stock = 12;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TECLADO PERFECT CHOICE PC';
        $nuevoProducto->descripcion = 'Perfect Choice PC-201038. Formato del teclado: Estándar. Estilo de teclado: Derecho. Interfaz del dispositivo: USB, Interruptor del teclado: Interruptor de membrana, Diseño de teclado: QWERTY. Longitud de cable: 1.5 m. Uso recomendado: Hogar. Color del producto: Negro';
        $nuevoProducto->precio = '92.80';
        $nuevoProducto->imagen = '/img/productos/perifericos/08.jpg';
        $nuevoProducto->stock = 33;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TECLADO MECANICO GAME FACTOR KBG400';
        $nuevoProducto->descripcion = 'TECLADO MECANICO GAME FACTOR KBG400 RGB SWITCH BLUE USB NEGRO';
        $nuevoProducto->precio = '748.20';
        $nuevoProducto->imagen = '/img/productos/perifericos/09.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MOUSEPAD GAMER YEYIAN YGF-68901';
        $nuevoProducto->descripcion = 'Mouse pad RGB con carga inalámbrica, con base de agarra antiderrapante, conexión micro USB y retroalimentación, sus dimensiones son de 353 mm x 256 mm 6 mm, su cable mide 1.6 m y tiene una rotación de 7 colores, rojo, verde, azul, morado, naranja, blanco y cyan.';
        $nuevoProducto->precio = '773.72';
        $nuevoProducto->imagen = '/img/productos/perifericos/10.png';
        $nuevoProducto->stock = 8;
        $nuevoProducto->save();

        /* Laptops */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP LENOVO X1 CARBON 14"';
        $nuevoProducto->descripcion = 'El portátil ThinkPad X1 Carbon de 7.ª generación, que es una versión más fina y ligera, es mucho más estiloso con una cobertura superior opcional de fibra de carbono. ';
        $nuevoProducto->precio = '47,125.00';
        $nuevoProducto->imagen = '/img/productos/laptop/01.jpg';
        $nuevoProducto->stock = 11;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP GAMER MSI GF63 15.6"';
        $nuevoProducto->descripcion = 'Intel® Core™ i5, Modelo del procesador: i5-9300H, Frecuencia del procesador: 2.4 GHz. Diagonal de la pantalla: 39.6 cm (15.6"), Resolución de la pantalla: 1920 x 1080 Pixeles. Memoria interna: 8 GB, Tipo de memoria interna: DDR4-SDRAM. Capacidad total de almacenaje: 256 GB.';
        $nuevoProducto->precio = '17,498.60';
        $nuevoProducto->imagen = '/img/productos/laptop/02.png';
        $nuevoProducto->stock = 2;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP LENOVO V330-14ARR';
        $nuevoProducto->descripcion = 'Conciencia de valor sin sacrificar rendimiento, la laptop Lenovo V330 de 14", elegante y confiable, te ayuda a enfocarte en llevar adelante un negocio exitoso. La potente tecnología Intel';
        $nuevoProducto->precio = '15,150.76';
        $nuevoProducto->imagen = '/img/productos/laptop/03.jpg';
        $nuevoProducto->stock = 30;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP LENOVO AMD A4';
        $nuevoProducto->descripcion = 'LAPTOP LENOVO AMD A4 9125 4GB 500GB 14" W10H (81ST0000LM)';
        $nuevoProducto->precio = '6,936.80';
        $nuevoProducto->imagen = '/img/productos/laptop/04.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP DELL GAMING G5 5590';
        $nuevoProducto->descripcion = 'Laptop para juegos de 15 pulgadas con un diseño de 24 mm, un procesador Intel® Core™ de 9ª generación, potentes gráficos y memoria NVIDIA®, además de una pantalla con bisel estrecho.';
        $nuevoProducto->precio = '37,915.76';
        $nuevoProducto->imagen = '/img/productos/laptop/05.jpg';
        $nuevoProducto->stock = 9;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'LAPTOP LENOVO S340-15IIL';
        $nuevoProducto->descripcion = 'Intel® Core™ i5 de 10ma Generación. Factor de forma: Concha. Modelo del procesador: i5-1035G1, Frecuencia del procesador: 1 GHz. Diagonal de la pantalla: 39.6 cm (15.6"), Tipo HD: HD. Memoria interna: 12 GB, RAM: DDR4-SDRAM. HDD: 1000 GB';
        $nuevoProducto->precio = '18,049.60';
        $nuevoProducto->imagen = '/img/productos/laptop/06.jpg';
        $nuevoProducto->stock = 97;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'MACBOOK PRO 13"';
        $nuevoProducto->descripcion = 'El nuevo MacBook Pro redefine el significado de potencia y portabilidad. Da igual dónde te lleve tu imaginación: con procesadores y memoria de alto rendimiento, gráficos avanzados, almacenamiento ultrarrápido y mucho más, harás realidad tus ideas en tiempo récord.';
        $nuevoProducto->precio = '45,887.28';
        $nuevoProducto->imagen = '/img/productos/laptop/07.jpg';
        $nuevoProducto->stock = 5;
        $nuevoProducto->save();

        /* Componentes */
        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'VENTILADOR CPU NOCTUA';
        $nuevoProducto->descripcion = 'Noctua NH-U14S. Adecuado para: Procesador, Tipo: Enfriador, Diámetro de ventilador: 12 cm. Color del producto: Café, Acero inoxidable. Consumo energético: 1.56 W, Voltaje: 12 V. Ancho: 165 mm, Profundidad: 78 mm, Altura: 150 mm';
        $nuevoProducto->precio = '3,164.48';
        $nuevoProducto->imagen = '/img/productos/componentes/01.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'PASTA TERMAL THERMALTAKE';
        $nuevoProducto->descripcion = 'Thermaltake TG-7. Conductividad térmica: 3.3 W/m·K, Color del producto: Gris, Intervalo de temperatura operativa (T-T): -50 - 250 °C. Ancho: 90 mm, Profundidad: 16 mm, Altura: 145 mm';
        $nuevoProducto->precio = '154.28';
        $nuevoProducto->imagen = '/img/productos/componentes/02.jpg';
        $nuevoProducto->stock = 14;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'FUENTE DE PODER THERMALTAKE 100-240V';
        $nuevoProducto->descripcion = 'Thermaltake TR2. Potencia total: 600 W, Voltaje de entrada AC: 100 - 240 V, Máxima energía: 720 W. Alimentador de energía para tarjeta madre: 24-pines ATX. Utilizar con: PC, Factor de forma de fuente de alimentación (PSU)';
        $nuevoProducto->precio = '970.92';
        $nuevoProducto->imagen = '/img/productos/componentes/03.jpg';
        $nuevoProducto->stock = 82;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'KIT DE FUENTE DE ALIMENTACION HPE HOT-PLUG';
        $nuevoProducto->descripcion = 'Hewlett Packard Enterprise 865414-B21. Potencia total: 800 W, Voltaje de entrada AC: 100 - 240 V, Frecuencia de entrada AC: 50 - 60 Hz. Utilizar con: Servidor, Certificación 80 PLUS: 80 PLUS Platinum. Color del producto: Gris. Ancho: 68 mm, Profundidad: 40.4 mm, Altura: 225.3 mm';
        $nuevoProducto->precio = '8,868.20';
        $nuevoProducto->imagen = '/img/productos/componentes/04.jpg';
        $nuevoProducto->stock = 33;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'GABINETE EVOTEC EV-1008GSF';
        $nuevoProducto->descripcion = 'GABINETE EVOTEC EV-1008GSF TORRE GABINETE ATX MICRO-ATX';
        $nuevoProducto->precio = '691.36';
        $nuevoProducto->imagen = '/img/productos/componentes/05.jpg';
        $nuevoProducto->stock = 82;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'GABINETE ACTECK NIALL GI004';
        $nuevoProducto->descripcion = 'Completa todo lo que traes en mente con el gabinete Niall. Lo hicimos para cumplir con tus expectativas. Brillante. Sólido. Innovador. Espacioso. A la vanguardia. –Y hasta estéticamente planeado para evolucionar tus espacios.';
        $nuevoProducto->precio = '699.48';
        $nuevoProducto->imagen = '/img/productos/componentes/06.jpg';
        $nuevoProducto->stock = 496;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'GABINETE ACTECK INTEGRA ARSEN';
        $nuevoProducto->descripcion = 'Luces, cámara, acción. Su existencia está hecha para ese momento en el que enciendes todo y comienzan sus funciones: Soportar cada componente y hacer una integridad tecnológica para cada momento.';
        $nuevoProducto->precio = '699.48';
        $nuevoProducto->imagen = '/img/productos/componentes/07.jpg';
        $nuevoProducto->stock = 1;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA MADRE AUS PRIME B450-PLUS';
        $nuevoProducto->descripcion = 'ASUS PRIME B450-PLUS. Fabricante de procesador: AMD, Socket de procesador: Enchufe AM4, Procesador compatible: AMD Ryzen. tipos de memoria compatibles: DDR4-SDRAM.';
        $nuevoProducto->precio = '2,666.84';
        $nuevoProducto->imagen = '/img/productos/componentes/08.jpg';
        $nuevoProducto->stock = 2;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA MADRE GIGABYTE X570';
        $nuevoProducto->descripcion = 'Gigabyte X570 UD. Fabricante de procesador: AMD, Socket de procesador: Enchufe AM4, Procesador compatible: AMD Ryzen. tipos de memoria compatibles: DDR4-SDRAM, Tipo de ranuras de memoria: DIMM';
        $nuevoProducto->precio = '3,821.04';
        $nuevoProducto->imagen = '/img/productos/componentes/09.jpg';
        $nuevoProducto->stock = 7;
        $nuevoProducto->save();

        $nuevoProducto = new Articulo();
        $nuevoProducto->nombre = 'TARJETA DE SONIDO BROBOTIX';
        $nuevoProducto->descripcion = 'TARJETA DE SONIDO BROBOTIX 6.1 CANALES PCI-E';
        $nuevoProducto->precio = '482.56';
        $nuevoProducto->imagen = '/img/productos/componentes/10.jpg';
        $nuevoProducto->stock = 84;
        $nuevoProducto->save();
    }
}

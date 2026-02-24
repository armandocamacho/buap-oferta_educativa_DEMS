<?php
    // index.php
    require_once 'datos.php';

    // Obtenemos los datos agrupados para el listado
    $ofertaEducativa = obtenerOfertaAgrupada($unidadesAcademicas);

    /* ============================================
    CONFIGURACIÓN DE COLUMNAS
    ============================================ */
    $configCategorias = [
        "Preparatorias Urbanas (Plan De Estudios Bachillerato General)" => [
            "externas" => 2,
            "internas" => 2
        ],
        "Preparatorias Regionales (Plan De Estudios Bachillerato General)" => [
            "externas" => 1,
            "internas" => 1
        ],
        "Complejo Regional Norte (Plan De Estudios Bachillerato General)" => [
            "externas" => 1,
            "internas" => 1
        ],
        "Complejo Regional Centro (Plan De Estudios Bachillerato General)" => [
            "externas" => 2,
            "internas" => 2
        ],
        "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)" => [
            "externas" => 2,
            "internas" => 2
        ],
        "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)" => [
            "externas" => 1,
            "internas" => 1
        ],
        "Complejo Regional Sur (Plan De Estudios Bachillerato General)" => [
            "externas" => 3,
            "internas" => 3
        ],
        "Bachilleratos Tecnológicos" => [
            "externas" => 2,
            "internas" => 2
        ],
        "Programa Bachillerato Internacional" => [
            "externas" => 1,
            "internas" => 1
        ]
    ];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta Educativa DEMS | Preparatorias y Bachilleratos BUAP</title>
    <meta name="description" content="Consulta la oferta educativa de la Dirección de Educación Media Superior (DEMS) de la BUAP. Preparatorias urbanas, regionales, bachilleratos tecnológicos y programa internacional.">    
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <link rel="shortcut icon" href="./assets/escudo-buap.png" type="image/x-icon">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Oferta Educativa DEMS | Preparatorias BUAP">
    <meta property="og:description" content="Consulta todas las preparatorias, complejos regionales y bachilleratos tecnológicos de la Dirección de Educación Media Superior de la BUAP.">
    <meta property="og:url" content="https://bsu.buap.mx/f5x">
    <meta property="og:image" content="https://bsu.buap.mx/f5y">
    <meta property="og:site_name" content="BUAP - DEMS">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Oferta Educativa DEMS | BUAP">
    <meta name="twitter:description" content="Conoce la oferta educativa de nivel medio superior de la BUAP.">
    <meta name="twitter:image" content="https://bsu.buap.mx/f5y">

    <style>

        /* =====================================================
        SUPER GRID — TODA LA PÁGINA → SIEMPRE 3 COLUMNAS
        ====================================================== */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body { 
            font-family: 'BUAP Sans', 'Segoe UI', sans-serif; 
            background: #f0f2f5; 
            margin: 0; 
            width: 100%;
        }

        .layout-3cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .section-block { 
            border-radius:20px; 
            overflow:hidden; 
            border:1px solid #f0f2f5 ; 
            background:#fff;
        }

        .span-1 { grid-column: span 1; }
        .span-2 { grid-column: span 2; }
        .span-3 { grid-column: span 3; }

        .buapHeader {
            background: #1e3a5f; 
            color:white;
            width: 100%;
            height: 120px;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            align-items:center;
            padding:12px ;

        }
        .buapHeader-imageContainer {
            height:100%;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
        }
        .buapHeader-imageContainer-img {
            max-width:100%;
            max-height:100%;
        }

        .main-header { 
            background: #1e3a5f; 
            width: min(1200px, 90%);
            margin:auto; 
            color: #fff; 
            padding: 25px 20px; 
            font-size: 1.4rem; 
            font-weight: 900; 
            margin-top:60px;
        }

        .sub-header{
            font-size: 1.2rem; 
            margin-top:10px;
            font-weight: 700; 
        }

        .container {
            width: min(1200px, 90%);
            margin: 50px auto; 
        }

        .section-title {
            min-height:80px;
            font-size: 1.2rem; 
            font-weight: 800; 
            color: white;
            background-color: #1e3a5f;
            padding:1rem;
            display:flex;
            flex-wrap:wrap;
            align-items:center;
        }

        .section-title .subtitle {
            font-weight: 400; /* más ligero */
        }

        /* =====================================================
        GRID INTERNO DE TARJETAS — DINÁMICO
        ====================================================== */

        .grid-wrapper {
            padding:14px;
            display: grid;
            gap: 10px;
        }

        .int-cols-1 { grid-template-columns: repeat(1, 1fr); }
        .int-cols-2 { grid-template-columns: repeat(2, 1fr); }
        .int-cols-3 { grid-template-columns: repeat(3, 1fr); }


        /* =====================================================
        TARJETAS
        ====================================================== */

        .card-link {
            border-radius: 6px;
            padding: 10px;
            text-decoration: none;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border:1px solid #f0f2f5;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: 0.2s ease;
            min-height: 60px;
        }

        .card-link:hover {
            background: #eef6ff;
            border-color: #a2a1a1;
            box-shadow: 0 1px 3px #b7b7b7b7;
            transform: translateY(-2px);
        }
        .card-left-content { display: flex; align-items: center; gap:8px; color:#1e3a5f; }

        .banner-admision {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            height: 300px;
            gap: 10px;
        }

        .banner-admision__item {
            display: block;
            overflow: hidden;
        }

        .banner-admision__item--big {
            flex: 2; /* 2/3 */
        }

        .banner-admision__item--small {
            flex: 1; /* 1/3 */
        }

        .banner-admision__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            object-position:top;
        }


        @media (max-width: 1279px) {
            .main-header { 
                font-size: 1.4rem;
            }

            .sub-header{
                font-size: 1.2rem; 
            }

            .section-title {
                font-size: 1rem; 
            }
        }

        @media (max-width: 767px) {
            .main-header { 
                font-size: 1.2rem;
            }

            .sub-header{
                font-size: 1rem; 
            }

            .layout-3cols {
                grid-template-columns: 1fr;
            }
            .span-1, .span-2, .span-3 {
                grid-column: span 1;
            }

            .int-cols-1, .int-cols-2, .int-cols-3 {
                grid-template-columns: 1fr;
            }

            .banner-admision {
                flex-direction: column;
                height: auto;
            }

            .banner-admision__item {
                width: 100%;
                height: 220px;
            }

        }

        .filter-bar {
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
        }

        .filter-bar input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            border: 2px solid #1e3a5f;
            font-size: 1rem;
            outline: none;
            transition: 0.2s ease;
            color: #1e3a5f;
        }

        .filter-bar input:focus {
            border-color: #1e3a5f;
            box-shadow: 0 0 0 2px rgba(30,58,95,0.1);
        }
        .filter-bar input::placeholder{
            color:#1e3a5f
        }

    </style>
</head>
<body>

    <header class="buapHeader">
        <div class="buapHeader-imageContainer">
            <img class="buapHeader-imageContainer-img" src="./assets/escudo_negativo.png"
                alt="logo_buap_cyan">
        </div>
        <div style="text-align:center;">
            <span style="font-weight:bold;">OFERTA EDUCATIVA <br> DEMS</span>
        </div>
    </header>


    <div class="banner-admision">
        <a href="https://bsu.buap.mx/f5Z" target="_blank" 
        class="banner-admision__item banner-admision__item--big">
            <img 
                src="./assets/admision-2026.jpg" 
                alt="admision buap 2026"
                class="banner-admision__img"
            >
        </a>

        <a href="https://admision.buap.mx/sites/default/files/Admision_2026/0.Documentos/Fechas_importantes_admision_2026.pdf" 
        target="_blank"
        class="banner-admision__item banner-admision__item--small">
            <img 
                src="./assets/fechas.png" 
                alt="fechas admision buap 2026"
                class="banner-admision__img"
            >
        </a>
    </div>


    <h1 class="main-header">
        NUESTRA OFERTA EDUCATIVA
        <div class="sub-header">Direccion de Educación Media Superior</div>
    </h1>

    <div class="container">

        <div class="filter-bar">
            <input 
                type="text" 
                id="filtroNombre" 
                placeholder="Buscar por nombre corto..."
            >
        </div>

        <div class="layout-3cols">

            <?php foreach ($ofertaEducativa as $categoria => $items): ?>

                <?php
                $config = $configCategorias[$categoria] ?? ['externas' => 1, 'internas' => 1];

                $colsExternas = $config['externas'];
                $colsInternas = $config['internas'];

                ?>

                <!-- SECCIÓN COMPLETA con span dinámico -->
                <div class="section-block span-<?php echo $colsExternas; ?>">

                    <div class="section-title">
                        <?php
                            $tituloFormateado = preg_replace(
                                '/\((.*?)\)/',
                                '<span class="subtitle">($1)</span>',
                                htmlspecialchars($categoria)
                            );
                            echo $tituloFormateado;
                        ?>
                    </div>

                    <!-- TARJETAS INTERNAS CON COLUMNAS DINÁMICAS -->
                    <div class="grid-wrapper int-cols-<?php echo $colsInternas; ?>">

                        <?php foreach ($items as $id => $itemDatos): ?>
                        <a  href="detalle.php?id=<?php echo $id; ?>" 
                            class="card-link"
                            data-nombre="<?php echo strtolower(htmlspecialchars($itemDatos['nombre'])); ?>"
                        >
                            <div class="card-left-content">
                                <span><?php echo htmlspecialchars($itemDatos['nombre']); ?></span>
                            </div>

                        </a>
                        <?php endforeach; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

    <footer style="width:100%; display:flex; justify-content:center;">
        <img style="width:100%; max-width:1200px;" src="./assets/dems.png" alt="cintillo_dems">
    </footer>


    <script>
        document.getElementById("filtroNombre").addEventListener("keyup", function() {

            const filtro = this.value.toLowerCase().trim();
            const cards = document.querySelectorAll(".card-link");
            const sections = document.querySelectorAll(".section-block");

            cards.forEach(card => {
                const nombre = card.dataset.nombre;

                if (nombre.includes(filtro)) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });

            // Ocultar secciones vacías
            sections.forEach(section => {
                const visibles = section.querySelectorAll(".card-link:not([style*='display: none'])");

                if (visibles.length === 0) {
                    section.style.display = "none";
                } else {
                    section.style.display = "block";
                }
            });

        });
    </script>

</body>
</html>

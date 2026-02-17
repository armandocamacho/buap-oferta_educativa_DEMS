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
    <title>Oferta Educativa</title>
    <link rel="stylesheet" href="./assets/fonts/fonts.css">

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

        .main-header { 
            background: #1e3a5f; 
            width: min(1200px, 90%);
            border-radius:15px 15px 0 0; 
            margin:auto; 
            color: #fff; 
            padding: 25px 20px; 
            font-size: 1.4rem; 
            font-weight: 900; 
        }

        .container {
            width: min(1200px, 90%);
            margin: 100px auto; 
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

        @media (max-width: 1279px) {
            .main-header { 
                font-size: 1.4rem;
            }
            .section-title {
                font-size: 1rem; 
            }
        }

        @media (max-width: 767px) {
            .main-header { 
                font-size: 1.2rem;
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
    <div class="main-header">NUESTRA OFERTA EDUCATIVA</div>

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

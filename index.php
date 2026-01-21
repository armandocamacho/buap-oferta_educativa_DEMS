<?php
    // index.php
    require_once 'datos.php';

    // Obtenemos los datos agrupados para el listado
    $ofertaEducativa = obtenerOfertaAgrupada($unidadesAcademicas);

    /* ============================================
        CONFIGURACIÓN DE COLUMNAS
       ============================================ */

    // Columnas externas → cuántas columnas ocupa cada sección en el super layout
    $columnasPorCategoria = [
        "Preparatorias Urbanas (Plan De Estudios Bachillerato General)" => 2,
        "Preparatorias Regionales (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Norte (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Centro (Plan De Estudios Bachillerato General)" => 2,
        "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)" => 2,
        "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Sur (Plan De Estudios Bachillerato General)" => 3,
        "Bachilleratos Tecnológicos" => 2,
        "Programa Bachillerato Internacional" => 1
    ];

    // Columnas internas → cuántas columnas tienen las TARJETAS dentro de cada sección
    $columnasInternasPorCategoria = [
        "Preparatorias Urbanas (Plan De Estudios Bachillerato General)" => 2,
        "Preparatorias Regionales (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Norte (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Centro (Plan De Estudios Bachillerato General)" => 2,
        "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)" => 2,
        "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)" => 1,
        "Complejo Regional Sur (Plan De Estudios Bachillerato General)" => 3,
        "Bachilleratos Tecnológicos" => 2,
        "Programa Bachillerato Internacional" => 1
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta Educativa</title>

    <style>

        /* =====================================================
           SUPER GRID — TODA LA PÁGINA → SIEMPRE 3 COLUMNAS
        ====================================================== */

        .layout-3cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px;
        }

        /* Secciones que ocupan 1-2-3 columnas */
        .section-block { padding: 10px ; border-radius:10px; }
        .span-1 { grid-column: span 1; }
        .span-2 { grid-column: span 2; }
        .span-3 { grid-column: span 3; }

        /* Responsive: móvil → una sola columna */
        @media (max-width: 700px) {
            .layout-3cols {
                grid-template-columns: 1fr;
            }
            .span-1, .span-2, .span-3 {
                grid-column: span 1;
            }
        }

        /* =====================================================
           ESTILOS GENERALES
        ====================================================== */
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f0f2f5; margin: 0; }
        .main-header { background: #1e3a5f; color: #fff; padding: 15px 20px; font-size: 1.2rem; font-weight: bold; }
        .container { max-width: 1200px; margin: 20px auto; padding: 0 15px; }

        .section-title {
            min-height:50px;
            font-size: 1.1rem; font-weight: bold; color: #000;
            margin-bottom: 12px; padding-bottom: 5px;
            border-bottom: 2px dotted #1e3a5f;
        }

        /* =====================================================
           GRID INTERNO DE TARJETAS — DINÁMICO
        ====================================================== */

        .grid-wrapper {
            display: grid;
            gap: 10px;
        }

        .int-cols-1 { grid-template-columns: repeat(1, 1fr); }
        .int-cols-2 { grid-template-columns: repeat(2, 1fr); }
        .int-cols-3 { grid-template-columns: repeat(3, 1fr); }

        /* Responsive interno */
        @media (max-width: 700px) {
            .int-cols-1, .int-cols-2, .int-cols-3 {
                grid-template-columns: 1fr;
            }
        }

        /* =====================================================
           TARJETAS
        ====================================================== */

        .card-link {
            background: #fff;
            border: 1px solid #3b82f6;
            border-radius: 6px;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: 0.2s ease;
        }

        .card-link:hover {
            background: #eef6ff;
            border-color: #1e3a5f;
            transform: translateY(-2px);
        }

        .card-left-content { display: flex; align-items: center; }
        .icon-arrow { width: 18px; height: 18px; fill: #3b82f6; margin-right: 10px; }

    </style>
</head>
<body>

    <div class="main-header">NUESTRA OFERTA EDUCATIVA</div>

    <div class="container">

        <div class="layout-3cols">

            <?php foreach ($ofertaEducativa as $categoria => $items): ?>

                <?php
                    $colsExternas = $columnasPorCategoria[$categoria] ?? 1;
                    $colsInternas = $columnasInternasPorCategoria[$categoria] ?? 1;
                ?>

                <!-- SECCIÓN COMPLETA con span dinámico -->
                <div class="section-block span-<?php echo $colsExternas; ?>">

                    <div class="section-title">
                        <?php echo htmlspecialchars($categoria); ?>
                    </div>

                    <!-- TARJETAS INTERNAS CON COLUMNAS DINÁMICAS -->
                    <div class="grid-wrapper int-cols-<?php echo $colsInternas; ?>">

                        <?php foreach ($items as $id => $itemDatos): ?>
                        <a href="detalle.php?id=<?php echo $id; ?>" class="card-link">

                            <div class="card-left-content">
                                <svg class="icon-arrow" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/>
                                </svg>
                                <span><?php echo htmlspecialchars($itemDatos['nombre']); ?></span>
                            </div>

                        </a>
                        <?php endforeach; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>

</body>
</html>

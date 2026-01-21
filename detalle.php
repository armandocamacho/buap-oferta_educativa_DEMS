<?php
// detalle.php
require_once 'datos.php';

$unidadId = isset($_GET['id']) ? $_GET['id'] : null;
$unidad = null;

if ($unidadId && isset($unidadesAcademicas[$unidadId])) {
    $unidad = $unidadesAcademicas[$unidadId];
} else {
    die("Unidad académica no encontrada o ID inválido.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($unidad['nombre_completo']); ?></title>
    <style>
        /* --- ESTILOS BASE (Igual que antes) --- */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 0; color: #333; }
        .main-header { background-color: #1e3a5f; color: white; padding: 15px 20px; font-size: 1.2rem; font-weight: bold; box-shadow: 0 2px 5px rgba(0,0,0,0.2); text-transform: uppercase; display: flex; align-items: center;}
        .back-link { color: white; text-decoration: none; margin-right: 15px; font-size: 1.5rem; display: flex; align-items: center; }
        .container { max-width: 1200px; margin: 20px auto; padding: 0 15px; }
        .info-card { background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 25px; }
        .card-title { font-size: 1.3rem; color: #1e3a5f; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #eef6ff; font-weight: bold; }
        .duracion-text { font-size: 1.2rem; font-weight: bold; color: #333; display: flex; align-items: center; }
        .icon-clock { width: 24px; height: 24px; margin-right: 10px; fill: #1e3a5f; }
        .map-container { width: 100%; height: 400px; border-radius: 6px; overflow: hidden; border: 1px solid #ddd; }
        .map-frame { width: 100%; height: 100%; border: 0; }
        
        /* --- ESTILOS PLAN DE ESTUDIOS COMÚN (1ro - 4to) --- */
        .plan-grid-comun { display: grid; grid-template-columns: repeat(1, 1fr); gap: 20px; margin-bottom: 30px;}
        @media (min-width: 768px) { .plan-grid-comun { grid-template-columns: repeat(2, 1fr); } }
        @media (min-width: 1024px) { .plan-grid-comun { grid-template-columns: repeat(4, 1fr); } }

        .semestre-block { border: 1px solid #e0e0e0; border-radius: 6px; background-color: #fafafa; overflow: hidden; height: 100%; }
        .semestre-header { background-color: #1e3a5f; color: white; padding: 10px 15px; font-weight: bold; font-size: 1.1rem; }
        .semestre-content { padding: 15px; }
        .area-tronco-label { display: block; font-weight: bold; color: #555; margin-bottom: 8px; font-size: 0.95rem; border-bottom: 1px solid #eee; padding-bottom: 5px;}
        .materias-list { list-style-type: disc; padding-left: 20px; margin: 0; }
        .materias-list li { margin-bottom: 6px; font-size: 0.9rem; color: #444; line-height: 1.4; }

        /* --- NUEVOS ESTILOS PARA ÁREAS PROPEDÉUTICAS (5to y 6to FUSIONADOS) --- */
        .areas-section-title { font-size: 1.3rem; color: #1e3a5f; margin-top: 40px; margin-bottom: 10px; font-weight: bold; text-align: center;}
        .areas-section-desc { text-align: center; color: #666; margin-bottom: 25px; font-size: 1rem; max-width: 800px; margin-left: auto; margin-right: auto;}
        
        /* Grid para las tarjetas de áreas */
        .areas-grid { display: grid; grid-template-columns: repeat(1, 1fr); gap: 25px; }
        @media (min-width: 900px) { .areas-grid { grid-template-columns: repeat(2, 1fr); } }

        /* Bloque principal de un Área (contiene 5to y 6to) */
        .area-propedeutica-block {
            background-color: #fff;
            border: 2px solid #1e3a5f; /* Borde más destacado */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(30, 58, 95, 0.15);
        }

        .area-propedeutica-header {
            background-color: #1e3a5f;
            color: white;
            padding: 12px 15px;
            text-align: center;
            font-weight: bold;
            font-size: 1.15rem;
        }

        /* Contenedor flexible para poner 5to y 6to lado a lado */
        .semestres-fusionados-flex {
            display: flex;
            flex-direction: column; /* En móviles, uno debajo del otro */
        }
        @media (min-width: 600px) {
            .semestres-fusionados-flex {
                flex-direction: row; /* En tablet/escritorio, lado a lado */
            }
        }

        /* Mitad del contenedor (cada semestre) */
        .semestre-mitad {
            flex: 1; /* Toman el mismo ancho */
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        @media (min-width: 600px) {
            .semestre-mitad {
                border-bottom: none;
                border-right: 1px solid #eee; /* Línea divisoria vertical */
            }
            .semestre-mitad:last-child { border-right: none; }
        }
        
        /* Título interno (5to Semestre / 6to Semestre) */
        .sub-semestre-title {
            display: block;
            font-weight: bold;
            color: #1e3a5f;
            margin-bottom: 12px;
            font-size: 1.05rem;
        }
        
        /* --- ESTILOS NUEVOS PARA SECCIONES COMPLEMENTARIAS --- */

        /* Listas estilizadas para Perfiles */
        .profile-list { list-style: none; padding: 0; }
        .profile-list li { 
            position: relative; 
            padding-left: 25px; 
            margin-bottom: 10px; 
            color: #444; 
            line-height: 1.6; 
        }
        .profile-list li::before {
            content: '✔'; /* O un icono SVG si prefieres */
            position: absolute;
            left: 0;
            color: #1e3a5f;
            font-weight: bold;
        }

        /* Galería de Imágenes */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }
        .gallery-item {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            cursor: pointer;
        }
        .gallery-item:hover { transform: scale(1.03); }

        /* Redes Sociales */
        .social-container {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .social-btn {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 0.95rem;
            transition: opacity 0.2s;
        }
        .social-btn:hover { opacity: 0.9; }
        .social-btn.facebook { background-color: #1877F2; }
        .social-btn.instagram { background-color: #E4405F; }
        .social-btn.twitter { background-color: #1DA1F2; }
        .social-btn.web { background-color: #1e3a5f; }
        .social-icon { width: 20px; height: 20px; fill: white; margin-right: 10px; }
    </style>
</head>
<body>
    <div class="main-header">
        <a href="index.php" class="back-link" title="Volver">&#8592;</a>
        <?php echo htmlspecialchars($unidad['nombre_completo']); ?>
    </div>

    <style>
        /* ------------------------ TABS ------------------------ */
        .tabs {
            display: flex;
            gap: 10px;
            border-bottom: 2px solid #d0d4da;
            margin-bottom: 20px;
        }

        .tab-btn {
            background: #e9edf3;
            border: none;
            padding: 10px 18px;
            border-radius: 6px 6px 0 0;
            cursor: pointer;
            font-size: 0.95rem;
            color: #1e3a5f;
            font-weight: bold;
        }

        .tab-btn.active {
            background: #1e3a5f;
            color: white;
        }

        .tab-section {
            display: none;
            animation: fadeIn 0.25s ease-in-out;
        }

        .tab-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <div class="container">

        <!-- Barra de Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab-target="plan">Plan de Estudios</button>
            <button class="tab-btn" data-tab-target="porque">¿Por qué estudiar este plan?</button>
            <button class="tab-btn" data-tab-target="ingreso">Perfil de Ingreso</button>
            <button class="tab-btn" data-tab-target="duracion">Duración y Modalidad</button>
            <button class="tab-btn" data-tab-target="egreso">Perfil de Egreso</button>
            <button class="tab-btn" data-tab-target="campo">Campo Laboral</button>
            <button class="tab-btn" data-tab-target="ubicacion">Ubicación</button>
            <button class="tab-btn" data-tab-target="galeria">Galeria de Imágenes</button>
            <button class="tab-btn" data-tab-target="sociales">Redes Sociales</button>
        </div>

        <!-- ================== TAB PLAN DE ESTUDIOS ================== -->
        <div class="tab-section active" data-tab="plan">
            <div class="info-card">
                <div class="card-title">Plan de Estudios</div>

                <!-- Tu contenido original se mantiene idéntico -->
                <?php if (isset($unidad['plan_estudios_comun'])): ?>
                    <div class="plan-grid-comun">
                        <?php foreach ($unidad['plan_estudios_comun'] as $semestreNombre => $materias): ?>
                            <div class="semestre-block">
                                <div class="semestre-header"><?php echo htmlspecialchars($semestreNombre); ?></div>
                                <div class="semestre-content">
                                    <span class="area-tronco-label">Área de Tronco Común</span>
                                    <ul class="materias-list">
                                        <?php foreach ($materias as $materia): ?>
                                            <li><?php echo htmlspecialchars($materia); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($unidad['tronco_comun']) && !empty($unidad['tronco_comun'])): ?>
                    <h3 class="areas-section-title">Materias de Tronco Común</h3>
                    <div class="plan-grid-comun">
                        <?php foreach ($unidad['tronco_comun'] as $semestreNombre => $materias): ?>
                            <div class="semestre-block">
                                <div class="semestre-header"><?php echo htmlspecialchars($semestreNombre); ?></div>
                                <div class="semestre-content">
                                    <span class="area-tronco-label">Área de Tronco Común</span>
                                    <ul class="materias-list">
                                        <?php foreach ($materias as $materia): ?>
                                            <li><?php echo htmlspecialchars($materia); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>

                <?php if (isset($unidad['areas_propedeuticas']) && !empty($unidad['areas_propedeuticas'])): ?>
                    <h3 class="areas-section-title">Áreas de Formación Propedéutica (Terminales)</h3>
                    <p class="areas-section-desc">
                        El alumno deberá elegir una de las siguientes áreas. Las materias correspondientes al área elegida se cursarán de forma seriada durante el <strong>5.º y 6.º Semestre</strong>.
                    </p>

                    <div class="areas-grid">
                        <?php foreach ($unidad['areas_propedeuticas'] as $nombreArea => $semestresArea): ?>
                            <div class="area-propedeutica-block">
                                <div class="area-propedeutica-header"><?php echo htmlspecialchars($nombreArea); ?></div>
                                
                                <div class="semestres-fusionados-flex">
                                    <div class="semestre-mitad" style="background:#f9fafb;">
                                        <span class="sub-semestre-title">5.º Semestre</span>
                                        <ul class="materias-list">
                                            <?php foreach ($semestresArea['5to'] as $materia): ?>
                                                <li><?php echo htmlspecialchars($materia); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                    <div class="semestre-mitad" style="background:#fff;">
                                        <span class="sub-semestre-title">6.º Semestre</span>
                                        <ul class="materias-list">
                                            <?php foreach ($semestresArea['6to'] as $materia): ?>
                                                <li><?php echo htmlspecialchars($materia); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- ================== TAB DURACIÓN ================== -->
        <div class="tab-section" data-tab="duracion">
            <div class="info-card">
                <div class="card-title">Duración del Programa</div>
                <div class="duracion-text">
                    <svg class="icon-clock" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8 8-8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    <?php echo htmlspecialchars($unidad['duracion']); ?>
                </div>
            </div>
        </div>

        <!-- ================== TAB UBICACIÓN ================== -->
        <div class="tab-section" data-tab="ubicacion">
            <div class="info-card">
                <div class="card-title">Ubicación</div>
                <p><strong><?php echo htmlspecialchars($unidad['ubicacion']['nombre']); ?></strong></p>
                <div class="map-container">
                    <iframe class="map-frame" loading="lazy" allowfullscreen
                        src="https://www.google.com/maps?q=<?php echo $unidad['ubicacion']['lat']; ?>,<?php echo $unidad['ubicacion']['lng']; ?>&hl=es;z=16&output=embed">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="tab-section" data-tab="porque">
            <div class="info-card">
                <div class="card-title">¿Por qué elegir este plan?</div>
                <?php if (isset($unidad['porque_estudiar'])): ?>
                    <p><?php echo nl2br(htmlspecialchars($unidad['porque_estudiar'])); ?></p>
                <?php else: ?>
                    <p>El <strong>Bachillerato Universitario (Plan 07)</strong> ofrece una formación integral diseñada para prepararte con excelencia académica.</p>
                    <ul class="profile-list">
                        <li><strong>Formación Propedéutica Especializada:</strong> En 5.º y 6.º semestre eliges un área de especialización (Salud, Ingenierías, Humanidades, etc.) que te prepara directamente para tu carrera universitaria.</li>
                        <li><strong>Desarrollo de Habilidades Digitales:</strong> Integración de tecnologías y entornos digitales a lo largo de los 6 semestres.</li>
                        <li><strong>Formación Integral:</strong> Incluye actividades culturales, emprendimiento y cultura física en todos los semestres.</li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-section" data-tab="ingreso">
            <div class="info-card">
                <div class="card-title">Perfil de Ingreso</div>
                <?php if (isset($unidad['perfil_ingreso']) && is_array($unidad['perfil_ingreso'])): ?>
                    <ul class="profile-list">
                        <?php foreach ($unidad['perfil_ingreso'] as $item): ?>
                            <li><?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Dirigido a egresados de nivel secundaria que cuenten con:</p>
                    <ul class="profile-list">
                        <li>Interés por continuar su formación académica en el nivel superior.</li>
                        <li>Disposición para el trabajo colaborativo y el aprendizaje autónomo.</li>
                        <li>Habilidades básicas de pensamiento matemático y comprensión lectora.</li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-section" data-tab="egreso">
            <div class="info-card">
                <div class="card-title">Perfil de Egreso</div>
                <p>Al concluir el bachillerato, el alumno habrá desarrollado competencias clave:</p>
                
                <?php if (isset($unidad['perfil_egreso']) && is_array($unidad['perfil_egreso'])): ?>
                    <ul class="profile-list">
                        <?php foreach ($unidad['perfil_egreso'] as $item): ?>
                            <li><?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <ul class="profile-list">
                        <li><strong>Dominio de Lengua Extranjera:</strong> Capacidad para comprender y producir textos en un segundo idioma (hasta nivel VI).</li>
                        <li><strong>Investigación:</strong> Habilidades para la sistematización de datos y metodología de investigación.</li>
                        <li><strong>Conciencia Social:</strong> Entendimiento de problemas socioeconómicos de México y la globalización.</li>
                        <li><strong>Especialización:</strong> Conocimientos sólidos en el área propedéutica elegida (Ciencias, Humanidades, Ingenierías o Comunicación).</li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-section" data-tab="campo">
            <div class="info-card">
                <div class="card-title">Continuidad Académica y Campo Laboral</div>
                <p>
                    La principal orientación de este plan es preparar al estudiante para el ingreso al <strong>Nivel Superior (Licenciaturas e Ingenierías)</strong>.
                </p>
                <p style="margin-top:15px;">Gracias a las salidas propedéuticas, el egresado está capacitado para ingresar a carreras afines a:</p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;">
                    <span style="background:#eef6ff; color:#1e3a5f; padding:5px 10px; border-radius:4px; font-size:0.9rem;">Ingenierías y Ciencias Exactas</span>
                    <span style="background:#eef6ff; color:#1e3a5f; padding:5px 10px; border-radius:4px; font-size:0.9rem;">Ciencias de la Salud (Medicina, Estomatología)</span>
                    <span style="background:#eef6ff; color:#1e3a5f; padding:5px 10px; border-radius:4px; font-size:0.9rem;">Ciencias Sociales y Derecho</span>
                    <span style="background:#eef6ff; color:#1e3a5f; padding:5px 10px; border-radius:4px; font-size:0.9rem;">Humanidades y Artes</span>
                </div>
            </div>
        </div>

        <div class="tab-section" data-tab="galeria">
            <div class="info-card">
                <div class="card-title">Galería de Instalaciones</div>
                <?php if (isset($unidad['galeria']) && !empty($unidad['galeria'])): ?>
                    <div class="gallery-grid">
                        <?php foreach ($unidad['galeria'] as $imgUrl): ?>
                            <img src="<?php echo htmlspecialchars($imgUrl); ?>" alt="Instalación" class="gallery-item" loading="lazy">
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p style="text-align:center; color:#888; padding: 20px;">
                        No hay imágenes disponibles en este momento.
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-section" data-tab="sociales">
            <div class="info-card">
                <div class="card-title">Contacto y Redes Sociales</div>
                <p>Mantente informado sobre noticias y convocatorias a través de nuestros canales oficiales:</p>
                
                <div class="social-container">
                    <?php if (isset($unidad['redes']['facebook'])): ?>
                        <a href="<?php echo htmlspecialchars($unidad['redes']['facebook']); ?>" target="_blank" class="social-btn facebook">
                            <svg class="social-icon" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                            Facebook
                        </a>
                    <?php endif; ?>

                    <?php if (isset($unidad['redes']['instagram'])): ?>
                        <a href="<?php echo htmlspecialchars($unidad['redes']['instagram']); ?>" target="_blank" class="social-btn instagram">
                            <svg class="social-icon" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            Instagram
                        </a>
                    <?php endif; ?>

                    <?php if (isset($unidad['redes']['web'])): ?>
                        <a href="<?php echo htmlspecialchars($unidad['redes']['web']); ?>" target="_blank" class="social-btn web">
                            <svg class="social-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                            Sitio Web
                        </a>
                    <?php endif; ?>
                </div>

                <?php if (!isset($unidad['redes']) || empty($unidad['redes'])): ?>
                    <p style="margin-top:10px; font-style: italic;">No hay redes sociales registradas.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- JS de Tabs -->
    <script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {

            const target = btn.dataset.tabTarget;

            // activar botón
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // mostrar sección correcta
            document.querySelectorAll('.tab-section').forEach(sec => {
                sec.classList.remove('active');
                if (sec.dataset.tab === target) sec.classList.add('active');
            });

        });
    });
    </script>

</body>

</html>
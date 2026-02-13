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
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <link rel="stylesheet" href="./css/detalle.css">
</head>
<body>
    <div class="main-header">
        <a href="index.php" class="back-link" title="Volver">&#8592;</a>
        <?php echo htmlspecialchars($unidad['nombre_completo']); ?>
    </div>

    <div class="container">

        <!-- Barra de Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab-target="plan">Plan de Estudios</button>
            <button class="tab-btn" data-tab-target="porque">¿Por qué estudiar con nosotros?</button>
            <button class="tab-btn" data-tab-target="ingreso">Perfil de Ingreso</button>
            <button class="tab-btn" data-tab-target="duracion">Duración y Modalidad</button>
            <button class="tab-btn" data-tab-target="egreso">Perfil de Egreso</button>
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

        <div class="tab-section" data-tab="porque">
            <div class="info-card">
                <div class="card-title">¿Por qué estudiar con nosotros?</div>
                <?php if (!empty($unidad['porque_estudiar'])): ?>
                    <p class="why-section"><?php echo nl2br(htmlspecialchars($unidad['porque_estudiar'])); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="tab-section" data-tab="ingreso">
            <div class="info-card">
                <div class="card-title">Perfil de Ingreso</div>
                <?php if ($unidad['perfil_ingreso'] == "MUM"): ?>
                    <p>El MUM señala en el perfil de ingreso para el NMS:</p>
                    <blockquote>
                        “Que los y las aspirantes a ingresar al bachillerato de la BUAP cuenten con los conocimientos, habilidades, actitudes y valores adquiridos en la formación media básica, provenientes de diversas modalidades educativas.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Lenguaje</li>
                        <li>Ciencias Naturales</li>
                        <li>Matemáticas</li>
                        <li>Ciencias Sociales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Lectura, comprensión, escritura y expresión</li>
                        <li>Interpretación de símbolos matemáticos, solución de problemas, razonamiento matemático</li>
                        <li>Ubicación en el espacio y tiempo</li>
                        <li>Identificar los fenómenos físicos y químicos elementales</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Actitud cívica</li>
                        <li>Respeto a las personas, a las ideas y a la naturaleza</li>
                        <li>Compromiso</li>
                        <li>Autonomía</li>
                        <li>Colaboración</li>
                        <li>Trabajo en equipo</li>
                    </ul>
                <?php elseif($unidad['perfil_ingreso'] == "BTSJC"): ?>
                    <p>El Modelo Universitario Minerva (MUM) de la <strong>Benemérita Universidad Autónoma de Puebla (BUAP)</strong> señala en el perfil de ingreso para el Nivel Medio Superior:</p>
                    <blockquote>
                        “Que los y las aspirantes a ingresar al bachillerato cuenten con los conocimientos, habilidades, actitudes y valores adquiridos en la educación básica, que les permitan integrarse de manera responsable, crítica y participativa a la Educación Media Superior.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Lenguaje y comunicación</li>
                        <li>Matemáticas</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales y Humanidades</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Lectura, comprensión y expresión oral y escrita</li>
                        <li>Razonamiento lógico-matemático y solución de problemas</li>
                        <li>Interpretación de fenómenos históricos, sociales y naturales</li>
                        <li>Diálogo y trabajo colaborativo</li>
                        <li>Pensamiento crítico</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Respeto a la diversidad cultural, social y de género</li>
                        <li>Reconocimiento de la igualdad y la no discriminación</li>
                        <li>Responsabilidad social</li>
                        <li>Autonomía</li>
                        <li>Compromiso</li>
                        <li>Valoración de sí mismo y del entorno natural</li>
                    </ul>
                <?php elseif($unidad['perfil_ingreso'] == "BTSPZ"): ?>
                    <p>El MUM de la <strong>Benemérita Universidad Autónoma de Puebla (BUAP)</strong> define el perfil de ingreso del Nivel Medio Superior como:</p>
                    <blockquote>
                        “La formación básica que permita al estudiantado integrarse de manera crítica, reflexiva y colaborativa al bachillerato.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Lenguaje</li>
                        <li>Matemáticas</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Expresión oral y escrita</li>
                        <li>Razonamiento lógico</li>
                        <li>Interpretación histórica y social</li>
                        <li>Trabajo en equipo</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Respeto</li>
                        <li>Autonomía</li>
                        <li>Compromiso</li>
                        <li>Responsabilidad social</li>
                    </ul>                    
                <?php elseif($unidad['perfil_ingreso'] == "BTAI"): ?>
                    <p>El Modelo Universitario Minerva (MUM) de la <strong>Benemérita Universidad Autónoma de Puebla (BUAP)</strong> establece para el perfil de ingreso del Nivel Medio Superior:</p>
                    <blockquote>
                        “Que los y las aspirantes cuenten con una formación integral básica que favorezca su incorporación crítica, ética y participativa al bachillerato.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Lenguaje y comunicación</li>
                        <li>Matemáticas básicas</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Comprensión lectora y expresión escrita</li>
                        <li>Razonamiento matemático</li>
                        <li>Interpretación del entorno natural y social</li>
                        <li>Trabajo colaborativo</li>
                        <li>Pensamiento crítico</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Respeto a la diversidad</li>
                        <li>Responsabilidad</li>
                        <li>Autonomía</li>
                        <li>Compromiso social</li>
                        <li>Valoración de la naturaleza</li>
                    </ul>
                <?php elseif($unidad['perfil_ingreso'] == "BTAZ"): ?>
                    <p>El Modelo Universitario Minerva (MUM) de la <strong>Benemérita Universidad Autónoma de Puebla (BUAP)</strong> establece que el perfil de ingreso al Nivel Medio Superior debe garantizar:</p>
                    <blockquote>
                        “Una formación integral básica que favorezca el pensamiento crítico, la participación social y el respeto a la diversidad.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Lenguaje y comunicación</li>
                        <li>Matemáticas</li>
                        <li>Ciencias Naturales</li>
                        <li>Ciencias Sociales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Comprensión lectora</li>
                        <li>Razonamiento matemático</li>
                        <li>Interpretación del entorno</li>
                        <li>Trabajo colaborativo</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Respeto a la diversidad</li>
                        <li>Responsabilidad</li>
                        <li>Autonomía</li>
                        <li>Compromiso social</li>
                    </ul>                    
                <?php else: ?>
                    <div>nothing here</div>
                <?php endif; ?>
            </div>
        </div>

        <!-- ================== TAB DURACIÓN ================== -->
        <div class="tab-section" data-tab="duracion">
            <div class="info-card">
                <div class="card-title">Duración y Modalidad del Programa</div>
                <div class="duracion-text">
                    <?php if (!empty($unidad['duracion'])): ?>
                        <?php echo htmlspecialchars($unidad['duracion']); ?>
                    <?php else: ?>
                        <ul class="profile-list">
                            <li>Duración del Programa: 6 semestres</li>
                            <li>Modalidad: Presencial</li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="tab-section" data-tab="egreso">
            <div class="info-card">
                <div class="card-title">Perfil de Egreso</div>
                <?php if ($unidad['perfil_egreso'] === "MUM"): ?>
                    <p>El MUM señala que:</p>
                    <blockquote>
                        “Los y las alumnas que egresan de la institución han logrado un conocimiento y comprensión de sí mismos, una formación académica que les ha familiarizado con los avances científicos y tecnológicos, que les permite una visión interdisciplinaria e integral, que los hace sensibles a las problemáticas sociales, económicas, políticas, éticas, estéticas y ecológicas, que los prepara para su ingreso al nivel superior; y que sean capaces de interactuar en equipo, con una actitud fraterna, libre, justa, pacífica, tolerante y de respeto a la pluralidad. De manera que nuestros egresados deben poseer:”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Metodologías para detectar los orígenes más comunes del error de las diferentes disciplinas</li>
                        <li>El carácter complejo multidimensional e interconectado de la realidad</li>
                        <li>Los fundamentos de las ciencias naturales, sociales y humanas, así como de sus relaciones con la cultura</li>
                        <li>La multiculturalidad planetaria y actitud fraterna, libre, justa, pacífica, tolerante y de respeto a la pluralidad nacional, para reconocerla y apreciarla más allá de los prejuicios etnocéntricos</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Hablar y escribir de manera clara, precisa y correcta en registro académico</li>
                        <li>Tener comprensión lectora suficiente para emprender con éxito hacia sus estudios de licenciatura</li>
                        <li>Leer comprensivamente textos en lengua extranjera</li>
                        <li>Capacidad de análisis y síntesis</li>
                        <li>Hábitos de estudio autodidactas</li>
                        <li>Destrezas básicas en alguna actividad artística</li>
                        <li>Capacidad de apreciación estética</li>
                        <li>Práctica sistemática de alguna disciplina deportiva o psicofísica (integración mente-cuerpo)</li>
                        <li>Desarrollo de su inteligencia emocional</li>
                        <li>Capacidad de manejo pacífico de conflictos</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Capacidad de asombro ante la realidad interna y externa</li>
                        <li>Apertura a las incertidumbres del conocimiento</li>
                        <li>Búsqueda permanente del autoconocimiento</li>
                        <li>Empatía con sus mensajes y apertura al diálogo</li>
                        <li>Apertura, comprensión y tolerancia hacia la diversidad</li>
                        <li>Respeto y aprecio por la diversidad biológica y su integración ecosistémica</li>
                        <li>Participación activa en asuntos colectivos de su competencia</li>
                        <li>Independencia de criterio</li>
                        <li>Aprecio y respeto por las expresiones artísticas de las más diversas culturas</li>
                        <li>Actitud responsable y crítica en los hábitos de consumo por sus implicaciones éticas, políticas, ecológicas y para la salud</li>
                    </ul>
                <?php elseif ($unidad['perfil_egreso'] === "BTSJC"): ?>
                    <p>Perfil de egreso del Bachillerato Tecnológico de San José Chiapa:</p>
                    <blockquote>
                        “Al concluir su formación en el Nivel Medio Superior, el estudiantado integra saberes, desarrolla competencias disciplinares y socioemocionales, y actúa con responsabilidad ética, compromiso social y pensamiento crítico, en congruencia con los principios de la Nueva Escuela Mexicana.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Integración de saberes interdisciplinarios</li>
                        <li>Formación humanística con enfoque comunitario</li>
                        <li>Uso ético de herramientas digitales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Aprendizaje autónomo e investigación</li>
                        <li>Resolución creativa de problemas</li>
                        <li>Comunicación efectiva en distintos formatos</li>
                        <li>Trabajo colaborativo presencial y virtual</li>
                        <li>Gestión socioemocional</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Integridad</li>
                        <li>Respeto y cultura de paz</li>
                        <li>Responsabilidad digital</li>
                        <li>Compromiso con la comunidad</li>
                    </ul>
                <?php elseif ($unidad['perfil_egreso'] === "BTSPZ"): ?>
                    <p>Perfil de egreso del Bachillerato Tecnológico de San Pedro Zacachimalpa:</p>
                    <blockquote>
                        “El egresado integra saberes, desarrolla pensamiento crítico y actúa con ética, responsabilidad y compromiso social.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Integración interdisciplinaria</li>
                        <li>Formación humanística</li>
                        <li>Herramientas digitales</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Aprendizaje autónomo</li>
                        <li>Comunicación efectiva</li>
                        <li>Resolución de problemas</li>
                        <li>Trabajo colaborativo</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Integridad</li>
                        <li>Respeto a la diversidad</li>
                        <li>Cultura de paz</li>
                    </ul>                    
                <?php elseif ($unidad['perfil_egreso'] === "BTAI"): ?>
                    <p>Perfil de egreso del Bachillerato Tecnológico Agropecuario de Ixtepec:</p>
                    <blockquote>
                        “La persona egresada se caracteriza por integrar conocimientos, habilidades y valores que le permiten desarrollarse en contextos presenciales y virtuales, con responsabilidad social y ética.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Saberes interdisciplinarios</li>
                        <li>Formación humanística</li>
                        <li>Tecnologías digitales aplicadas al aprendizaje</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Aprendizaje autónomo</li>
                        <li>Investigación básica</li>
                        <li>Comunicación multimodal</li>
                        <li>Resolución de problemas</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Ética</li>
                        <li>Respeto</li>
                        <li>Responsabilidad digital</li>
                        <li>Compromiso comunitario</li>
                    </ul>
                <?php elseif ($unidad['perfil_egreso'] === "BTAZ"): ?>
                    <p>Perfil de egreso del Bachillerato Tecnológico Agropecuario de Zacapoaxtla:</p>
                    <blockquote>
                        “El egresado desarrolla competencias académicas, digitales y socioemocionales que le permiten participar activamente en su comunidad con ética y responsabilidad.”
                    </blockquote>

                    <h3>Conocimientos:</h3>
                    <ul class="profile-list">
                        <li>Saberes integrados</li>
                        <li>Formación humanística</li>
                        <li>Tecnologías para el aprendizaje</li>
                    </ul>

                    <h3>Habilidades:</h3>
                    <ul class="profile-list">
                        <li>Aprendizaje autónomo</li>
                        <li>Investigación básica</li>
                        <li>Comunicación multimodal</li>
                        <li>Resolución creativa de problemas</li>
                    </ul>

                    <h3>Actitudes y valores:</h3>
                    <ul class="profile-list">
                        <li>Ética</li>
                        <li>Respeto</li>
                        <li>Compromiso comunitario</li>
                        <li>Responsabilidad digital</li>
                    </ul>
                <?php else: ?>
                    <div>nothing here</div>
                <?php endif; ?>
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

        <div class="tab-section" data-tab="galeria">
            <div class="info-card">
                <div class="card-title">Galería de Imágenes</div>
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
                <div class="card-title">Redes Sociales</div>
                <p>Mantente informado sobre noticias, actividades, procesos y convocatorias a través de nuestros canales oficiales:</p>
                
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

                    <?php if (isset($unidad['redes']['tiktok'])): ?>
                        <a href="<?php echo htmlspecialchars($unidad['redes']['tiktok']); ?>" target="_blank" class="social-btn tiktok">
                            <svg class="social-icon" viewBox="0 0 24 24">
                                <path d="M12.75 2h2.5c.2 1.9 1.7 3.4 3.6 3.6v2.5c-1.3-.1-2.5-.6-3.6-1.4v6.6c0 3.3-2.7 6-6 6s-6-2.7-6-6 2.7-6 6-6c.3 0 .7 0 1 .1v2.6c-.3-.1-.7-.2-1-.2-1.9 0-3.5 1.6-3.5 3.5S7.3 17 9.2 17s3.5-1.6 3.5-3.5V2z"/>
                            </svg>
                            TikTok
                        </a>
                    <?php endif; ?>
                </div>

                <?php if (!isset($unidad['redes']) || empty($unidad['redes'])): ?>
                    <p style="margin-top:10px; font-style: italic;">No hay redes sociales registradas.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <script>
        const tabs = document.querySelectorAll('.tab-btn');
        const sections = document.querySelectorAll('.tab-section');

        tabs.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tabTarget;

                tabs.forEach(b => b.classList.remove('active'));
                sections.forEach(s => s.classList.remove('active'));

                btn.classList.add('active');
                document.querySelector(`[data-tab="${target}"]`).classList.add('active');
            });
        });

    </script>
</body>
</html>
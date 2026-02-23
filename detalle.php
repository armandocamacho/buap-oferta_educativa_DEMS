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

                <?php if (isset($unidad['nuestra_oferta_educativa']) && !empty($unidad['nuestra_oferta_educativa'])): ?>
                    <h3 class="areas-section-title">Nuestra Oferta Educativa</h3>
                    <p class="areas-section-desc">
                        A la par de las materias de tronco común, el alumno cursará las siguientes materias correspondientes a su componente de formación laboral según la carrera técnica elegida:
                    </p>

                    <div class="areas-grid" style="grid-template-columns: 1fr;"> 
                        <?php foreach ($unidad['nuestra_oferta_educativa'] as $nombreCarrera => $semestresCarrera): ?>
                            <div class="area-propedeutica-block" style="margin-bottom: 20px;">
                                <div class="area-propedeutica-header semestre-header">
                                    <strong><?php echo htmlspecialchars($nombreCarrera); ?></strong>
                                </div>
                                
                                <div class="semestres-fusionados-flex" style="flex-wrap: wrap; display: flex; border: 1px solid #eaeaea; border-top: none; border-radius: 0 0 8px 8px;">
                                    <?php foreach ($semestresCarrera as $semestreKey => $materiasTecnicas): ?>
                                        <div class="semestre-mitad" style="flex: 1 1 30%; min-width: 250px; padding: 15px; border: 1px solid #f0f0f0; background:#fff;">
                                            <span class="sub-semestre-title" style="display: block; font-weight: bold; margin-bottom: 8px; color: var(--secondary-color);"><?php echo htmlspecialchars($semestreKey); ?></span>
                                            <ul class="materias-list">
                                                <?php foreach ($materiasTecnicas as $materia): ?>
                                                    <li><?php echo htmlspecialchars($materia); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
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
                    <blockquote>
                        Es deseable que los y las aspirantes al ingresar al bachillerato de la BUAP cuenten con una formación que les permita insertarse en el nivel medio.
                    </blockquote>
                    <h3>Perfil deseable:</h3>
                    <ul class="profile-list">
                        <li>Se reconocen como ciudadanas y ciudadanos.</li>
                        <li>Viven, reconocen y valoran la diversidad étnica, cultural, lingüística, sexual, política, social y de género.</li>
                        <li>Se reconocen como personas que gozan de los mismos derechos para vivir una vida digna, libre de discriminación.</li>
                        <li>Valoran sus potencialidades cognitivas, físicas y afectivas.</li>
                        <li>Desarrollan una forma propia de pensar.</li>
                        <li>Se perciben a sí mismas y a sí mismos como parte de la naturaleza.</li>
                        <li>Interpretan fenómenos, hechos y situaciones históricas, culturales, naturales y sociales.</li>
                        <li>Interactúan en procesos de diálogo con respeto y aprecio a la diversidad de capacidades, condiciones, necesidades, intereses y visiones al trabajar de manera cooperativa.</li>
                        <li>Intercambian ideas, cosmovisiones y perspectivas mediante distintos lenguajes.</li>
                        <li>Desarrollan el pensamiento crítico que les permita valorar los conocimientos y saberes de las ciencias y humanidades.</li>
                    </ul>
                <?php elseif($unidad['perfil_ingreso'] == "BTAI"): ?>
                    <p>Es deseable que los y las aspirantes a ingresar al bachillerato de la BUAP cuenten con la formación que marca el perfil de egreso de la educación básica:</p>
                    <ul class="profile-list">
                        <li>1. Se reconocen como ciudadanas y ciudadanos.</li>
                        <li>2. Viven, reconocen y valoran la diversidad étnica, cultural, lingüística, sexual, política, social y de género.</li>
                        <li>3. Se reconocen como personas que gozan de los mismos derechos para vivir una vida digna, libre de discriminación.</li>
                        <li>4. Valoran sus potencialidades cognitivas, físicas y afectivas.</li>
                        <li>5. Desarrollan una forma propia de pensar.</li>
                        <li>6. Se perciben a sí mismas y a sí mismos como parte de la naturaleza.</li>
                        <li>7. Interpretan fenómenos, hechos y situaciones históricas, culturales, naturales y sociales.</li>
                        <li>8. Interactúan en procesos de diálogo con respeto y aprecio a la diversidad de capacidades, condiciones, necesidades, intereses y visiones al trabajar de manera cooperativa.</li>
                        <li>9. Intercambian ideas, cosmovisiones y perspectivas mediante distintos lenguajes.</li>
                        <li>10. Desarrollan el pensamiento crítico que les permita valorar los conocimientos y saberes de las ciencias y humanidades.</li>
                    </ul>
                <?php elseif($unidad['perfil_ingreso'] == "BTSPZ"): ?>
                    <p>Es deseable que los y las aspirantes a ingresar al bachillerato de la BUAP cuenten con la formación que marca el perfil de egreso de la educación básica:</p>
                    <ul class="profile-list">
                        <li>1. Se reconocen como ciudadanas y ciudadanos.</li>
                        <li>2. Viven, reconocen y valoran la diversidad étnica, cultural, lingüística, sexual, política, social y de género.</li>
                        <li>3. Se reconocen como personas que gozan de los mismos derechos para vivir una vida digna, libre de discriminación.</li>
                        <li>4. Valoran sus potencialidades cognitivas, físicas y afectivas.</li>
                        <li>5. Desarrollan una forma propia de pensar.</li>
                        <li>6. Se perciben a sí mismas y a sí mismos como parte de la naturaleza.</li>
                        <li>7. Interpretan fenómenos, hechos y situaciones históricas, culturales, naturales y sociales.</li>
                        <li>8. Interactúan en procesos de diálogo con respeto y aprecio a la diversidad de capacidades, condiciones, necesidades, intereses y visiones al trabajar de manera cooperativa.</li>
                        <li>9. Intercambian ideas, cosmovisiones y perspectivas mediante distintos lenguajes.</li>
                        <li>10. Desarrollan el pensamiento crítico que les permita valorar los conocimientos y saberes de las ciencias y humanidades.</li>
                    </ul>                    
                <?php elseif($unidad['perfil_ingreso'] == "BTAZ"): ?>
                    <p>Es deseable que las y los aspirantes a ingresar al bachillerato de la BUAP cuenten con la formación que marca el perfil de egreso de la educación básica:</p>

                    <ul class="profile-list">
                        <li>1. Se reconocen como ciudadanas y ciudadanos.</li>
                        <li>2. Viven, reconocen y valoran la diversidad étnica, cultural, lingüística, sexual, política, social y de género.</li>
                        <li>3. Se reconocen como personas que gozan de los mismos derechos para vivir una vida digna, libre de discriminación.</li>
                        <li>4. Valoran sus potencialidades cognitivas, físicas y afectivas.</li>
                        <li>5. Desarrollan una forma propia de pensar.</li>
                        <li>6. Se perciben a sí mismas y a sí mismos como parte de la naturaleza.</li>
                        <li>7. Interpretan fenómenos, hechos y situaciones históricas, culturales, naturales y sociales.</li>
                        <li>8. Interactúan en procesos de diálogo con respeto y aprecio a la diversidad de capacidades, condiciones, necesidades, intereses y visiones al trabajar de manera cooperativa.</li>
                        <li>9.  Intercambian ideas, cosmovisiones y perspectivas mediante distintos lenguajes.</li>
                        <li>10. Desarrollan el pensamiento crítico que les permita valorar los conocimientos y saberes de las ciencias y humanidades</li>
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
                    <p>El perfil de egreso de la Educación Media Superior se define como la suma de los aprendizajes de trayectoria de cada uno de los recursos sociocognitivos, áreas de conocimiento y de los propósitos de la formación socioemocional que conforma la estructura curricular del MCCEMS a través de las distintas Unidades Académicas Curriculares (UAC), que contribuyen a dotar de identidad a la EMS, favoreciendo al desarrollo integral de las y los adolescentes y jóvenes, para construir y conformar una ciudadanía responsable y comprometida con los problemas de su comunidad, región y país y que tenga los elementos necesarios para poder decidir por su presente y futuro con bienestar y en una cultura de paz. Responsables con ellos mismos, con los demás y con la transformación de la sociedad en la que viven y responden a las características biopsicosocioculturales de las alumnas y los alumnos, así como a constantes cambios de los diversos contextos, plurales y multiculturales.</p>

                    <p>De acuerdo con lo anterior, al egresar contarán con las siguientes habilidades y valores:</p>

                    <ul class="profile-list">
                        <li>1. Comprende la necesidad de la integración de saberes para lograr desarrollarse en un mundo complejo de acuerdo con los principios de la NEM.</li>
                        <li>2. Integra en su vida una formación humanística, que iniciando desde la solución de problemas comunitarios lo lleve a comprender similitudes y diferencias con otros lugares y a nivel global.</li>
                        <li>3. Adquiere nuevas estrategias de aprendizaje que le ayudarán en la adquisición del aprendizaje autónomo (AA) y la investigación.</li>
                        <li>4. Asume la diversidad de opiniones en el aula como riqueza para comprender la diversidad y adoptar parte de ellas para configurar su código de valores.</li>
                        <li>5. Desarrolla habilidades para el aprendizaje autogestivo, adaptándose a distintos entornos de formación y utilizando herramientas digitales para investigar, analizar y construir su conocimiento.</li>
                        <li>6. Se desenvuelve en ambientes presenciales y virtuales, desarrollando competencias para el trabajo remoto, colaborativo y asincrónico, integrando nuevas tecnologías a su vida académica y profesional.</li>
                        <li>7. Evalúa información de diversas fuentes, distingue entre hechos y opiniones, y desarrolla estrategias para resolver problemas de forma creativa en entornos digitales y físicos.</li>
                        <li>8. Se expresa con claridad en distintos contextos y plataformas, utilizando lenguaje escrito, oral, visual y multimedia, adaptando su mensaje al entorno híbrido.</li>
                        <li>9. Gestiona su tiempo, emociones y relaciones interpersonales, favoreciendo la resiliencia y el bienestar en entornos digitales y físicos.</li>
                        <li>10. Actúa con integridad y respeto en comunidades presenciales y digitales, promoviendo la seguridad, privacidad y un comportamiento ético en la era digital.</li>
                    </ul>
                <?php elseif ($unidad['perfil_egreso'] === "BTAI"): ?>
                    <p>El perfil de egreso de la Educación Media Superior se define como la suma de los aprendizajes de trayectoria de cada uno de los recursos sociocognitivos, áreas de conocimiento y de los propósitos de la formación socioemocionales que conforman la estructura curricular del MCCEMS a través de las distintas Unidades Académicas Curriculares (UAC), que contribuyen a dotar de identidad a la EMS, favoreciendo al desarrollo integral de las y los adolescentes y jóvenes, para construir y conformar una ciudadanía responsable y comprometida con los problemas de su comunidad, región y país y que tenga los elementos necesarios para poder decidir por su presente y futuro con bienestar y en una cultura de paz. Responsables con ellos mismos, con los demás y con la transformación de la sociedad en la que viven y responden a las características biopsicosocioculturales de las y los estudiantes, así como a constantes cambios de los diversos contextos, plurales y multiculturales.</p>

                    <p>De acuerdo con lo anterior, al egresar contarán con las siguientes habilidades y valores:</p>

                    <ul class="profile-list">
                        <li>1. Comprende la necesidad de la integración de saberes para lograr desarrollarse en un mundo complejo de acuerdo con los principios de la NEM.</li>
                        <li>2. Integra en su vida una formación humanística, que iniciando desde la solución de problemas comunitarios lo lleve a comprender similitudes y diferencias con otros lugares y a nivel global.</li>
                        <li>3. Adquiere nuevas estrategias de aprendizaje que le ayudarán en la adquisición del aprendizaje autónomo (AA) y la investigación.</li>
                        <li>4. Asume la diversidad de opiniones en el aula como riqueza para comprender la diversidad y adoptar parte de ellas para configurar su código de valores.</li>
                        <li>5. Desarrolla habilidades para el aprendizaje autogestivo, adaptándose a distintos entornos de formación y utilizando herramientas digitales para investigar, analizar y construir su conocimiento.</li>
                        <li>6. Se desenvuelve en ambientes presenciales y virtuales, desarrollando competencias para el trabajo remoto, colaborativo y asincrónico, integrando nuevas tecnologías a su vida académica y profesional.</li>
                        <li>7. Evalúa información de diversas fuentes, distingue entre hechos y opiniones, y desarrolla estrategias para resolver problemas de forma creativa en entornos digitales y físicos.</li>
                        <li>8. Se expresa con claridad en distintos contextos y plataformas, utilizando lenguaje escrito, oral, visual y multimedia, adaptando su mensaje al entorno híbrido.</li>
                        <li>9. Gestiona su tiempo, emociones y relaciones interpersonales, favoreciendo la resiliencia y el bienestar en entornos digitales y físicos.</li>
                        <li>10.  Actúa con integridad y respeto en comunidades presenciales y digitales, promoviendo la seguridad, privacidad y un comportamiento ético en la era digital.</li>
                    </ul>
                <?php elseif ($unidad['perfil_egreso'] === "BTSPZ"): ?>
                    <p>El perfil de egreso de la Educación Media Superior se define como la suma de los aprendizajes de trayectoria de cada uno de los recursos sociocognitivos, áreas de conocimiento y de los propósitos de la formación socioemocionales que conforman la estructura curricular del MCCEMS a través de las distintas Unidades de Aprendizaje Curricular (UAC), que contribuyen a dotar de identidad a la EMS, favoreciendo al desarrollo integral de las y los adolescentes y jóvenes, para construir y conformar una ciudadanía responsable y comprometida con los problemas de su comunidad, región y país y que tenga los elementos necesarios para poder decidir por su presente y futuro con bienestar y en una cultura de paz. Responsables con ellos mismos, con los demás y con la transformación de la sociedad en la que viven y responden a las características biopsicosocioculturales de las y los estudiantes, así como a constantes cambios de los diversos contextos, plurales y multiculturales.</p>

                    <p>De acuerdo con lo anterior, al egresar contarán con las siguientes habilidades y valores:</p>

                    <ul class="profile-list">
                        <li>1. Comprende la necesidad de la integración de saberes para lograr desarrollarse en un mundo complejo de acuerdo con los principios de la NEM.</li>
                        <li>2. Integra en su vida una formación humanística, que iniciando desde la solución de problemas comunitarios lo lleve a comprender similitudes y diferencias con otros lugares y a nivel global.</li>
                        <li>3. Adquiere nuevas estrategias de aprendizaje que le ayudarán en la adquisición del aprendizaje autónomo y la investigación.</li>
                        <li>4. Asume la diversidad de opiniones en el aula como riqueza para comprender la diversidad y adoptar parte de ellas para configurar su código de valores.</li>
                        <li>5. Desarrolla habilidades para el aprendizaje autogestivo, adaptándose a distintos entornos de formación y utilizando herramientas digitales para investigar, analizar y construir su conocimiento.</li>
                        <li>6. Se desenvuelve en ambientes presenciales y virtuales, desarrollando competencias para el trabajo remoto, colaborativo y asincrónico, integrando nuevas tecnologías a su vida académica y profesional.</li>
                        <li>7. Evalúa información de diversas fuentes, distingue entre hechos y opiniones, y desarrolla estrategias para resolver problemas de forma creativa en entornos digitales y físicos.</li>
                        <li>8. Se expresa con claridad en distintos contextos y plataformas, utilizando lenguaje escrito, oral, visual y multimedia, adaptando su mensaje al entorno híbrido.</li>
                        <li>9. Gestiona su tiempo, emociones y relaciones interpersonales, favoreciendo la resiliencia y el bienestar en entornos digitales y físicos.</li>
                        <li>10. Actúa con integridad y respeto en comunidades presenciales y digitales, promoviendo la seguridad, privacidad y un comportamiento ético en la era digital.</li>
                    </ul>                    
                <?php elseif ($unidad['perfil_egreso'] === "BTAZ"): ?>
                    <p>El perfil de egreso de la EMS se define como la suma de los aprendizajes de trayectoria de cada uno de los recursos sociocognitivos, áreas de conocimiento y de los propósitos de la formación socioemocionales que conforman la estructura curricular del MCCEMS a través de las distintas Unidades Académicas Curriculares (UAC), que contribuyen a dotar de identidad a la EMS, favoreciendo al desarrollo integral de las y los adolescentes y jóvenes, para construir y conformar una ciudadanía responsable y comprometida con los problemas de su comunidad, región y país y que tenga los elementos necesarios para poder decidir por su presente y futuro con bienestar y en una cultura de paz. Responsables con ellos mismos, con los demás y con la transformación de la sociedad en la que viven y responden a las características biopsicosocioculturales de las alumnas y los alumnos, así como a constantes cambios de los diversos contextos, plurales y multiculturales.</p>

                    <p>De acuerdo con lo anterior, al egresar contarán con las siguientes habilidades y valores:</p>

                    <ul class="profile-list">
                        <li>Comprende la necesidad de la integración de saberes para lograr desarrollarse en un mundo complejo de acuerdo con los principios de la NEM.</li>
                        <li>Integra en su vida una formación humanística, que iniciando desde la solución de problemas comunitarios lo lleve a comprender similitudes y diferencias con otros lugares y a nivel global.</li>
                        <li>Adquiere nuevas estrategias de aprendizaje que le ayudarán en la adquisición del Aprendizaje Autónomo (AA) y la investigación.</li>
                        <li>Asume la diversidad de opiniones en el aula como riqueza para comprender la diversidad y adoptar parte de ellas para configurar su código de valores.</li>
                        <li>Desarrolla habilidades para el aprendizaje autogestivo, adaptándose a distintos entornos de formación y utilizando herramientas digitales para investigar, analizar y construir su conocimiento.</li>
                        <li>Se desenvuelve en ambientes presenciales y virtuales, desarrollando competencias para el trabajo remoto, colaborativo y asincrónico, integrando nuevas tecnologías a su vida académica y profesional.</li>
                        <li>Evalúa información de diversas fuentes, distingue entre hechos y opiniones, y desarrolla estrategias para resolver problemas de forma creativa en entornos digitales y físicos.</li>
                        <li>Se expresa con claridad en distintos contextos y plataformas, utilizando lenguaje escrito, oral, visual y multimedia, adaptando su mensaje al entorno híbrido.</li>
                        <li>Gestiona su tiempo, emociones y relaciones interpersonales, favoreciendo la resiliencia y el bienestar en entornos digitales y físicos.</li>
                        <li>Actúa con integridad y respeto en comunidades presenciales y digitales, promoviendo la seguridad, privacidad y un comportamiento ético en la era digital.</li>
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
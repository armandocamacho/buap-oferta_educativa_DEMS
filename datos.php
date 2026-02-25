<?php

function estructuraBaseUnidad() {
    return [
        "categoria" => "",
        "nombre_corto" => "",
        "nombre_completo" => "",
        "plan_estudios_comun" => [],
        "tronco_comun" => [],
        "areas_propedeuticas" => [],
        "porque_estudiar" => "",
        "perfil_ingreso" => [],
        "perfil_egreso" => [],
        "ubicacion" => [
            "nombre" => "",
            "lat" => null,
            "lng" => null
        ],
        "galeria" => [],
        "redes" => [
            "facebook" => null,
            "instagram" => null,
            "web" => null,
        ],
    ];
}

/* =====================================================
    PLANES GENERALES COMPARTIDOS
===================================================== */

$PLAN_ESTUDIOS_COMUN = [
    "1er Semestre" => [
        "Álgebra", "Cultura Física I", "Emprendimiento I", "Habilidades digitales",
        "Historia Universal", "Lengua Extranjera I", "Lenguaje y Procesos comunicativos",
        "Lógica y Argumentación", "Psicología en la adolescencia I", "Química I", "Tutoría I"
    ],
    "2do Semestre" => [
        "Cultura Física II", "Emprendimiento II", "Filosofía Práctica",
        "Geometría Plana y Trigonometría Plana", "Historia siglo XX", "Lengua Extranjera II",
        "Lenguaje y Medios de Expresión", "Psicología en la adolescencia II", "Química II",
        "Sistematización de Datos", "Tutoría II"
    ],
    "3er Semestre" => [
        "Biología I: del Átomo al Hombre", "Cultura Física III", "Emprendimiento III",
        "Fundamentos del Arte", "Geometría Analítica", "Historia de la Identidad Mexicana",
        "Lengua Extranjera III", "Lenguaje y Procesos de Escritura para la Investigación",
        "Manejo de Datos y Comunicaciones", "Psicología Educativa: Vocacional", "Tutoría III"
    ],
    "4to Semestre" => [
        "Apreciación del Arte", "Biología II: del Hombre a la Biosfera", "Cultura Física IV",
        "Emprendimiento IV", "Entornos de Desarrollo a través de las Tecnologías Digitales",
        "Funciones", "Historia de la Sociedad Mexicana", "Lengua Extranjera IV",
        "Lenguaje y Difusión de la Investigación", "Psicología Educativa: Profesiográfica", "Tutoría IV"
    ]
];

$TRONCO_COMUN_GENERAL = [
    "5to Semestre" => [
        "Cálculo", "Física I", "Narrativa Literaria", "Lengua Extranjera V",
        "Innovación de Aplicaciones", "Introducción a la Economía",
        "Cultura Física V", "Emprendimiento V", "Tutoría V"
    ],
    "6to Semestre" => [
        "Análisis de Eventos", "Física II", "Expresión Literaria", "Lengua Extranjera VI",
        "Desarrollo de Habilidades Digitales a Través de Dispositivos Autónomos",
        "Problemas Socioeconómicos de México",
        "Cultura Física VI", "Emprendimiento VI", "Tutoría VI"
    ]
];

$AREAS_PROPEDUTICAS_GENERALES = [
    "Matemáticas e Ingenierías" => [
        "5to" => [
            "Física para Ingenierías", 
            "Temas Selectos de Física I", 
            "Temas Selectos de Química", 
            "Temas Selectos de Matemáticas"
        ],
        "6to" => [
            "Física para Ingenierías II", 
            "Temas Selectos de Física II", 
            "Química de Materiales", 
            "Cálculo Diferencial e Integral Aplicado a su Entorno"
        ]
    ],
    "Ciencias Experimentales" => [
        "5to" => [
            "Microbiología", 
            "Biología Celular", 
            "Bioquímica I"
        ],
        "6to" => [
            "Investigación en Campo y Laboratorio", 
            "Ciencias de la Salud", 
            "Bioquímica II"
        ]
    ],
    "Ciencias Sociales y Económico Administrativas" => [
        "5to" => [
            "Introducción a las Ciencias Sociales", 
            "Globalización y Sus Tendencias Económicas y Políticas I", 
            "Procesos Económicos Administrativos y Contables I", 
            "Introducción al Derecho"
        ],
        "6to" => [
            "Metodología de Investigación de las Ciencias Sociales", 
            "Globalización y sus Tendencias Económicas y Políticas II", 
            "Procesos Económicos Administrativos y Contables II", 
            "Introducción a las Ciencias Políticas"
        ]
    ],
    "Humanidades" => [
        "5to" => [
            "Arte y Sociedad", 
            "Introducción a la Psicología", 
            "Problemas del Conocimiento", 
            "Comunidad Filosófica de Indagación"
        ],
        "6to" => [
            "Arte y Tecnología", 
            "Psicología", 
            "Filosofía del Hombre", 
            "Bioética"
        ]
    ],
    "Comunicación" => [
        "5to" => [
            "Habilidades Digitales para la Comunicación", 
            "Lingüística y Análisis del Discurso", 
            "Comprensión y Producción de Textos en Lengua Extranjera I"
        ],
        "6to" => [
            "Tecnologías Innovadoras de Comunicación y Expresión Digital", 
            "Literatura y Periodismo", 
            "Comprensión y Producción de Textos en Lengua Extranjera II"
        ]
    ]
];


/* =====================================================
    OFERTA EDUCATIVA BACHILLERATOS TECNOLÓGICOS
===================================================== */


$PLAN_ESTUDIOS_BT_COMUN = [
    "1er Semestre" => [
        "Lengua y Comunicación I", 
        "Inglés I", 
        "Pensamiento Matemático I", 
        "Cultura Digital I", 
        "La Materia y sus Interacciones", 
        "Humanidades I", 
        "Ciencias Sociales I", 
        "Orientación Vocacional y Profesiográfica", 
        "Tutoría I"
    ],
    "2do Semestre" => [
        "Lengua y Comunicación II", 
        "Inglés II", 
        "Pensamiento Matemático II", 
        "Cultura Digital II", 
        "Conservación de la Energía y sus Interacciones con la Materia", 
        "Humanidades II", 
        "Ciencias Sociales II", 
        "Educación Integral en Sexualidad y Género", 
        "Tutoría II"
    ],
    "3er Semestre" => [
        "Lengua y Comunicación III", 
        "Inglés III", 
        "Pensamiento Matemático III", 
        "Ecosistemas: Interacciones, Energía y Dinámica", 
        "Conciencia Histórica I. Perspectivas del México Antiguo en los Contextos Globales", 
        "Educación para la Salud", 
        "Tutoría III"
    ],
    "4to Semestre" => [
        "Lengua y Comunicación IV", 
        "Inglés IV", 
        "Formación Matemática I", 
        "Reacciones Químicas: Conservación de la Materia en la Formación de Nuevas Sustancias", 
        "Conciencia Histórica II. México Durante el Expansionismo Capitalista", 
        "Actividades Físicas y Deportivas I", 
        "Tutoría IV"
    ],
    "5to Semestre" => [
        "Formación Matemática II", 
        "La Energía en los Procesos de la Vida Diaria", 
        "Conciencia Histórica III. La Realidad Actual en Perspectiva Histórica", 
        "Comprensión y Producción de Textos en Lengua Extranjera I", 
        "Actividades Físicas y Deportivas II", 
        "Tutoría V"
    ],
    "6to Semestre" => [
        "Formación Matemática III", 
        "Organismos: Estructuras y Procesos. Herencia y Evolución Biológica", 
        "Comprensión y Producción de Textos en Lengua Extranjera II", 
        "Actividades Físicas y Deportivas III", 
        "Tutoría VI"
    ]
];

$OFERTA_SAN_JOSE_CHIAPA = [
    "Técnico Profesional en Automatización y Control Industrial" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Metrología e Instrumentación", "Diseño y Manufactura"],
        "3er Semestre" => ["Electrónica Digital", "Fundamentos Eléctricos I"],
        "4to Semestre" => ["Sistemas Combinacionales", "Fundamentos Eléctricos II", "Planeación de Proyectos"],
        "5to Semestre" => ["Sistemas Secuenciales", "Circuitos Electro Neumáticos", "Innovación y Emprendimiento"],
        "6to Semestre" => ["Programación de PLCs", "Tecnologías Inalámbricas", "Desarrollo y Protección Tecnológica"]
    ],
    "Técnico Profesional en Procesos Industriales" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Introducción a Procesos", "Administración y Comunicación"],
        "3er Semestre" => ["Procesos de Manufactura", "Planeación y Control de la Producción"],
        "4to Semestre" => ["Cadena de Suministro y Logística", "Operación de Almacenes", "Planeación de Proyectos"],
        "5to Semestre" => ["Calidad", "Productividad", "Innovación y Emprendimiento"],
        "6to Semestre" => ["Mantenimiento Industrial", "Tecnologías Aplicadas a la Producción", "Modelado Técnico"]
    ],
    "Técnico Profesional en Desarrollo de Sistemas Informáticos" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Método Científico y Prototipos", "Sostenibilidad en Sistemas"],
        "3er Semestre" => ["Introducción a los Sistemas y Tecnologías de la Información", "Introducción a la IA"],
        "4to Semestre" => ["Diseño de Sistemas y Tecnologías de la Información Desarrolladas con IA", "Aplicaciones", "Planeación de Proyectos"],
        "5to Semestre" => ["Análisis de Sistemas y Tecnologías de la Información", "Software I", "Innovación y Emprendimiento"],
        "6to Semestre" => ["Implantación de Sistemas y Tecnologías de la Información", "Software II", "Correspondencia de Proyectos"]
    ]
];

$OFERTA_ZACACHIMALPA = [
    "Técnico Profesional como Asistente de Laboratorio Clínico" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Fundamentos de Química y Preparación de Soluciones", "Estructura y Función de las Células"],
        "3er Semestre" => ["Microbiología General", "Toma y Manejo de Muestras Clínicas", "Manejo de Material y Equipo del Laboratorio Clínico (Control de Calidad)"],
        "4to Semestre" => ["Detección de Hongos y Protozoarios", "Análisis de Orina y Exudados", "Análisis de Muestras Fecales"],
        "5to Semestre" => ["Normatividad y Operatividad del Laboratorio Clínico (Bioética)", "Química Sanguínea", "Pruebas Hematológicas Serie Roja", "Pruebas Hematológicas Serie Blanca"],
        "6to Semestre" => ["Detección de Bacterias y Virus", "Banco de Sangre", "Pruebas Especiales Inmunológicas", "Pruebas Especiales Homeostáticas"]
    ],
    "Técnico Profesional en Sistemas Industriales" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Metrología Eléctrica, Electrónica y Dimensional", "Dibujo Asistido por Computadora"],
        "3er Semestre" => ["Programación I", "Procesos de Manufactura", "Electrónica Analógica y Digital"],
        "4to Semestre" => ["Programación II", "Control de Máquinas Eléctricas", "Manufactura Asistida por Computadora"],
        "5to Semestre" => ["Programación en PLC (Redes Industriales)", "Fundamentos de Análisis de Datos", "Sistemas Neumáticos e Hidráulicos", "Certificación 1"],
        "6to Semestre" => ["Mantenimiento Industrial", "Robótica Industrial", "Instrumentación Virtual", "Certificación 2"]
    ],
    "Técnico Profesional en Mantenimiento de Computadoras y Desarrollo Web" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Introducción a la Programación", "Electrónica Analógica y Digital"],
        "3er Semestre" => ["Administración de Proyectos de Software", "Desarrollo Front-End"],
        "4to Semestre" => ["Programación Orientada a Objetos", "Estructuras de Datos", "Interfaces y Tarjetas de Adquisición de Datos", "Fundamentos de Redes"],
        "5to Semestre" => ["Desarrollo Back-End", "Bases de Datos", "Configuración y Administración de Redes", "Certificación 1"],
        "6to Semestre" => ["Desarrollo Móvil", "Desarrollo de Aplicaciones Web para I.4.0", "Mantenimiento de Equipo de Cómputo", "Certificación 2"]
    ],
    "Técnico Profesional en Gestión de la Calidad" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Introducción a la Gestión de la Calidad", "Fundamentos de Tecnologías Industriales"],
        "3er Semestre" => ["Fundamentos de Programación y Automatización", "Procesos de Manufactura y Mantenimiento Industrial", "Introducción a Herramientas de la Transformación Digital"],
        "4to Semestre" => ["Optimización de Procesos Industriales", "Normas Internacionales de Calidad y Certificación", "Metrología y Control de Instrumentos"],
        "5to Semestre" => ["Bases de Datos y Gestión de la Información", "Costos y Análisis Financiero en la Gestión de Calidad", "Control Estadístico de la Calidad", "Certificación 1"],
        "6to Semestre" => ["Auditorías y Evaluación de Sistemas de Calidad", "Gestión Financiera y Toma de Decisiones", "Gestión Integral de la Calidad", "Certificación 2"]
    ]
];

$OFERTA_IXTEPEC = [
    "Técnico Profesional en Producción Animal" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Zootecnia General"],
        "3er Semestre" => ["Sistemas Agropecuarios Sustentables"],
        "4to Semestre" => ["Nutrición Animal", "Etología y Bienestar Animal", "Anatomía y Fisiología Animal"],
        "5to Semestre" => ["Genética Aplicada", "Reproducción Animal", "Medicina Preventiva"],
        "6to Semestre" => ["Diseño y Evaluación de Proyectos", "Producción de Bovinos (carne y leche)", "Producción de Especies Alternativas", "Producción de Cerdos", "Producción de Aves (postura y engorda)", "Producción de Ovinos y Caprinos", "Salud Pública", "Producción Apícola"]
    ],
    "Técnico Profesional en Producción Agrícola" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Agrometeorología", "Topografía"],
        "3er Semestre" => ["Mecanización Agrícola", "Botánica General"],
        "4to Semestre" => ["Uso y Manejo del Agua", "Producción de Granos"],
        "5to Semestre" => ["Fisiología Vegetal", "Edafología", "Fertilización Agrícola", "Producción de Forrajes"],
        "6to Semestre" => ["Nutrición Vegetal", "Sistemas Agropecuarios Sustentables", "Agricultura de Precisión", "Diseño y Evaluación de Proyectos", "Genética Aplicada", "Producción Hortofrutícola", "Producción de Plantas Ornamentales", "Producción de Cultivos Hidropónicos"]
    ]
];

$OFERTA_ZACAPOAXTLA = [
    "Técnico Profesional en Producción Animal Sostenible" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Anatomía y Fisiología Animal", "Etología y Bienestar Animal"],
        "3er Semestre" => ["Zootecnia General", "Sistemas Agropecuarios Sustentables"],
        "4to Semestre" => ["Nutrición Animal", "Instalaciones Pecuarias", "Alimentos y Alimentación Animal"],
        "5to Semestre" => ["Producción de Bovinos (carne y leche)", "Genética Aplicada", "Reproducción Animal", "Medicina Preventiva"],
        "6to Semestre" => ["Diseño y Evaluación de Proyectos", "Producción de Especies Alternativas", "Producción de Cerdos", "Producción de Aves (postura y engorda)", "Producción de Ovinos y Caprinos", "Salud Pública", "Producción Apícola"]
    ],
    "Técnico Profesional en Agronomía Aplicada" => [
        "1er Semestre" => ["Introducción a las Carreras Tecnológicas"],
        "2do Semestre" => ["Fisiología Vegetal", "Botánica General"],
        "3er Semestre" => ["Sistemas Agropecuarios Sustentables", "Fertilización Agrícola"],
        "4to Semestre" => ["Mecanización Agrícola", "Agrometeorología", "Edafología", "Topografía"],
        "5to Semestre" => ["Nutrición Vegetal", "Producción de Granos", "Uso y Manejo del Agua", "Producción Hortofrutícola", "Producción de Forrajes", "Genética Aplicada"],
        "6to Semestre" => ["Producción de Plantas Ornamentales", "Producción de Cultivos Hidropónicos", "Agricultura de Precisión", "Diseño y Evaluación de Proyectos"]
    ]
];



/* =====================================================
    PLAN DE ESTUDIOS PREPARATORIA A DISTANCIA
===================================================== */

$PLAN_ESTUDIOS_PAD = [
    "Primer Año - Otoño" => [
        'Propedéutico Requisito de Ingreso',
        'TAC Compartir Información "C" y "CE"',
        'La Química en mi Vida "CE" "C" "M"',
        'Uso mi Idioma para Expresarme "C" y "CS"',
        'Haciendo mi Vida Sustentable "CE"',
        'Conociendo mi Salud a través de la Estadística "CE" "M" "C"',
        'La Ética y Yo "C" y "H"'
    ],
    "Primer Año - Primavera" => [
        'Conociendo otra Lengua "C"',
        'Mi mundo en Representaciones Simbólicas y Algoritmicas "CE" "M" "CS"',
        'Argumentación y Asertividad "CS" "C" "H"',
        'México y el Mundo Contemporáneo "CS"',
        'Apreciando el Arte a través de la Historia "C" y "CS"',
        'Ética en el Mundo Actual "C" y "CE"'
    ],
    "Segundo Año - Otoño" => [
        'El Mundo y Yo "C" y "CS"',
        'Matemáticas en la Naturaleza "CE" "M" "CS"',
        'Aplicando Herramientas Ofimáticas "C" y "M"',
        'Comprendiendo el Origen de la vida para Explicar el Mundo "CE" y "CS"',
        'Expresión en otra lengua "C"',
        'Mi Administración y su Impacto en los Procesos Sociales Actuales "CS" y "M"'
    ],
    "Segundo Año - Primavera" => [
        'Producción en otra Lengua "C"',
        'Aplicando el Cálculo en la Naturaleza y la Sociedad "CE" "M" "CS" "H"',
        'Estrategias de Estudio "C" y "H"',
        'Dinero y el Mundo Contemporáneo "CS" "C" "H" "M"',
        'Explicando el Movimiento en los Fenómenos Mecánicos y Naturales "C" "CE" "M"'
    ]
];

/* =====================================================
    PLAN DE ESTUDIOS BACHILLERATO INTERNACIONAL (BI)
===================================================== */

$PLAN_ESTUDIOS_BI = [
    "Primer Año" => [
        "Lengua y Literatura",
        "Lengua y Cultura Extranjera con Laboratorio",
        "Pensamiento y lenguaje matemático",
        "Análisis Integral de las sociedades",
        "Herramientas Digitales y su aplicación",
        "Ciencias Naturales",
        "Metodología de la Ciencia",
        "Filosofía y pensamiento crítico",
        "Práctica y colaboración ciudadana",
        "Tutoría I",
        "Educación integral en sexualidad y género",
        "Actividades Físicas y Deportivas I"
    ],
    "Segundo Año" => [
        "Grupo 1: Estudios de Lengua y Literatura",
        "Grupo 2: Adquisición de Lenguas",
        "Grupo 5: Matemáticas",
        "Monografía I",
        "Grupo 4: Ciencias",
        "Optativa I",
        "Grupo 3: Individuos y Sociedades",
        "Teoría del Conocimiento I",
        "Creatividad, Actividad y Servicio I",
        "Tutoría II",
        "Orientación Educativa I",
        "Actividades Físicas y Deportivas II"
    ],
    "Tercer Año" => [
        "Grupo 1: Estudios de Lengua y Literatura",
        "Grupo 2: Adquisición de Lenguas",
        "Grupo 5: Matemáticas",
        "Monografía II",
        "Grupo 4: Ciencias",
        "Optativa II",
        "Grupo 3: Individuos y Sociedades",
        "Teoría del Conocimiento II",
        "Creatividad, Actividad y Servicio II",
        "Tutoría III",
        "Orientación Educativa II",
        "Actividades Físicas y Deportivas III"
    ]
];

$GRUPOS_ASIGNATURAS_BI = [
    "Grupo 1: Estudios de Lengua y Literatura" => [
        "Literatura y Representación Teatral I y II NM",
        "Lengua A: Literatura I y II NM y NS"
    ],
    "Grupo 2: Adquisición de Lenguas" => [
        "Lengua ab initio I y II NM",
        "Lengua B I y II NM y NS",
        "Lenguas Clásicas I y II NM y NS"
    ],
    "Grupo 3: Individuos y Sociedades" => [
        "Antropología Social y Cultural I y II NM y NS",
        "Economía I y II NM y NS",
        "Filosofía I y II NM y NS",
        "Geografía I y II NM y NS",
        "Gestión Empresarial I y II NM y NS",
        "Historia I y II NM y NS",
        "Lengua y Cultura I y II NM",
        "Política Global I y II NM y NS",
        "Psicología I y II NM y NS",
        "Religiones del Mundo I y II NM",
        "Sociedad Digital I y II NM y NS"
    ],
    "Grupo 4: Ciencias" => [
        "Biología I y II NM y NS",
        "Ciencias del Deporte, el Ejercicio y la Salud I y II NM y NS",
        "Física I y II NM y NS",
        "Informática I y II NM y NS",
        "Química I y II NM y NS",
        "Sistemas Ambientales y Sociedades I y II NM y NS",
        "Tecnología del Diseño I y II NM y NS"
    ],
    "Grupo 5: Matemáticas" => [
        "Matemáticas: Análisis y Enfoques I y II NM y NS",
        "Matemáticas: Aplicaciones e Interpretación I y II NM y NS"
    ],
    "Grupo 6: Artes (Optativas)" => [
        "Artes Visuales I y II NM y NS",
        "Cine I y II NM y NS",
        "Danza I y II NM y NS",
        "Música I y II NM y NS",
        "Teatro I y II NM y NS"
    ]
];



$unidadesAcademicas = [

    // --- CATEGORÍA: PREPARATORIAS URBANAS ---

    "2deOctubrePuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. 2 de Octubre de 1968",
            "nombre_completo" => "Preparatoria 2 de Octubre de 1968",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Porque aquí empieza tu mejor historia: La Preparatoria 2 de Octubre de 1968 BUAP te ofrece una formación integral diseñada para que desarrolles tu máximo potencial. No es solo un lugar para estudiar: es un espacio donde creces, te descubres y construyes el futuro que quieres. En nuestras aulas encontrarás calidad educativa, innovación constante y una sólida formación en valores. Aquí formamos jóvenes críticos, creativos y comprometidos, preparados para enfrentar con éxito los desafíos del presente y del futuro. Cultura que transforma: A través de talleres artísticos y culturales, podrás expresar ideas, descubrir talentos y fortalecer tu identidad. Nuestros espacios están pensados para que explores tu creatividad y te conectes con una comunidad vibrante y activa. Deporte que impulsa: Con instalaciones adecuadas y múltiples selectivos deportivos, te ofrecemos un ambiente donde la disciplina, el trabajo en equipo y el orgullo por representar a la BUAP se viven día a día. Somos cuna de talentos que destacan dentro y fuera de la institución. Una comunidad que te acompaña: Nuestro trato humano es parte de lo que nos distingue. Valoramos el respeto, la cercanía y el diálogo entre estudiantes, docentes y personal. Aquí encontrarás un ambiente donde te sentirás escuchado, apoyado y motivado. Resultados que hablan por sí solos: Con más del 90% de eficiencia terminal, nuestros estudiantes concluyen exitosamente sus estudios y acceden al nivel superior con bases sólidas, seguridad académica y visión de futuro. Estudiar en la Preparatoria 2 de Octubre de 1968 BUAP es elegir una educación completa, humana y llena de oportunidades. Es elegir prepararte para la universidad… pero también para la vida. Aquí te esperamos para que inicies una etapa increíble, llena de aprendizajes, amistades y logros que te acompañarán siempre.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria 2 De Octubre de 1968",
                "lat" => 19.025688704025445,
                "lng" => -98.23038933255336
            ],
            "galeria" => [
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-1.jpeg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-2.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-3.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-4.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-5.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-6.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-7.jpg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-8.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/prepa2deoctubre",
                "instagram" => "https://www.instagram.com/prepa2deoctubrebuap/?hl=es",
                "web" => "https://prepa2deoctubrebuap.blogspot.com/"
            ],
        ]
    ),

    "LazaroCardenasPuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Gral. Lázaro Cárdenas del Río",
            "nombre_completo" => "Prep. Gral. Lázaro Cárdenas del Río",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Los aspirantes a nivel medio superior deberían elegir la Preparatoria “Gral. Lázaro Cárdenas del Río” de la Benemérita Universidad Autónoma de Puebla porque representa una opción educativa sólida, con prestigio institucional, formación integral y compromiso con la excelencia académica. Como parte de la BUAP, una de las universidades públicas más reconocidas del país, la preparatoria brinda a sus estudiantes acceso a programas educativos actualizados, docentes capacitados y una estructura académica alineada con estándares de calidad que favorecen el desarrollo del pensamiento crítico, científico y humanista. La Unidad Académica se distingue por promover una formación integral que va más allá del aprendizaje en el aula. A través de actividades académicas, culturales, deportivas y de divulgación científica, como la participación en programas institucionales, ferias profesiográficas y proyectos de investigación, los estudiantes fortalecen sus habilidades, descubren sus intereses vocacionales y construyen un proyecto de vida sólido. Además, cuenta con programas de tutorías y acompañamiento académico que favorecen la permanencia, el bienestar estudiantil y la orientación oportuna para la toma de decisiones académicas y profesionales.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "Preparatoria Gral. Lázaro Cárdenas del Río BUAP",
                "lat" => 19.074280512331573,
                "lng" => -98.21979723921858
            ],
            "galeria" => [
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-1.jpeg",
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-2.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-3.jpeg",
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-4.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-5.jpeg",
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-6.jpeg",
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-7.jpeg",
                // "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-8.jpeg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => "https://www.instagram.com/prepa.lazarocr?igsh=MTN6MnlldDJnbnU3cA==",
                "web" => null,
            ],
        ]
    ),

    "PrepaCuetzalan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Cuetzalan",
            "nombre_completo" => "Preparatoria Cuetzalan",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria BUAP Cuetzalan es una excelente opción para estudiar el bachillerato. Estudiar en esta preparatoria es elegir una formación académica de calidad en un entorno con valores, que propicia el conocimiento, la diversidad cultural y el desarrollo integral de sus estudiantes. Contamos con un excelente nivel académico, el personal docente está altamente capacitado: La BUAP es una de las universidades más reconocidas de México, y su preparatoria en Cuetzalan no es la excepción. Contamos con instalaciones modernas y bien equipadas, incluyendo biblioteca, laboratorios de cómputo e idiomas, jardines, espacios deportivos y talleres de ajedrez, música y danza. Además, promovemos un ambiente seguro e inclusivo, con tecnología actualizada, áreas de estudio colaborativo, mantenimiento constante y personal capacitado que impulsa el aprendizaje integral, la creatividad y la convivencia sana. Aquí se fomenta el pensamiento crítico, la responsabilidad y el compromiso social, preparando a los jóvenes para continuar sus estudios de nivel superior o integrarse con éxito a distintos ámbitos profesionales. Al ser una institución pública la Preparatoria BUAP Cuetzalan ofrece costos accesibles, convirtiéndose en la opción educativa más económica de la región en un ambiente de calidad y calidez. Se promueve la enseñanza y el aprendizaje de lenguas originarias, lo que es ideal para aquellos interesados en preservar y promover la cultura local, es una institución donde convergen estudiantes de diferentes municipios, culturas y etnias (Escuela multicultural) lo que enriquece la experiencia educativa y fomenta el respeto y la tolerancia. En esta institución la prioridad es la atención a los y las estudiantes. Aquí encontrarán acompañamiento académico, un ambiente seguro y las herramientas necesarias para construir su futuro.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Cuetzalan",
                "lat" => 20.020809203128575,  // sustituir con coordenadas reales
                "lng" => -97.52525733408416  // sustituir con coordenadas reales
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-1.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-2.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-3.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-4.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-5.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-6.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-7.jpeg",
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-8.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/share/1C6QXjx1Fh/",
                "instagram" => "https://www.instagram.com/prepacuetzalancrzn?igsh=b3c0N3F6enpubXB6",
                "web" => null
            ],
        ]
    ),

    "PrepaIzucar" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Izúcar de Matamoros (CRM)",
            "nombre_completo" => "Preparatoria Izúcar de Matamoros (CRM)",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria BUAP Campus Izúcar de Matamoros brinda a sus estudiantes una formación académica integral orientada al ingreso y desempeño exitoso en el nivel superior. Cuenta con una planta docente especializada y con instalaciones modernas que responden a las necesidades actuales del proceso de enseñanza-aprendizaje. El plantel dispone de laboratorios de ciencias, de tecnologías de la información y de lenguas, biblioteca física y virtual, auditorio, canchas deportivas y áreas de esparcimiento, lo que permite el desarrollo académico, cultural y deportivo del estudiantado. Desde los primeros semestres, las y los alumnos reciben orientación vocacional que les permite identificar sus intereses profesionales. En la etapa terminal, se ofrece una formación específica por áreas del conocimiento: Humanidades; Ciencias Experimentales y de la Salud; Matemáticas e Ingenierías; y Ciencias Sociales, facilitando una transición informada hacia la educación superior. Además de impulsar la excelencia académica, la preparatoria fomenta valores como el trabajo en equipo, la responsabilidad social, la inclusión, el respeto y el cuidado del medio ambiente, a través de proyectos multidisciplinarios, actividades culturales, deportivas y de integración comunitaria. La Preparatoria BUAP Izúcar de Matamoros es un referente educativo en la Mixteca Poblana y una opción sólida para quienes buscan una formación de calidad con sentido humano y crítico.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Izúcar de Matamoros (CRM)",
                "lat" => 18.634679373164392,
                "lng" => -98.46938149427781 
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaIzucar/imagen-1.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-2.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-3.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-4.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-5.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-6.png",
                "./assets/unidades_academicas/PrepaIzucar/imagen-7.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/share/17vkRQGZbq/",
                "instagram" => "https://www.instagram.com/crmbuap?igsh=cWM0OHplY3ZqcXcy",
                "web" => "https://crmixteca.buap.mx/"
            ],
        ]
    ),

    "PrepaChiautla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Chiautla",
            "nombre_completo" => "Preparatoria Chiautla",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria Chiautla de Tapia, adscrita al Complejo Regional Mixteca de la BUAP, representa una opción educativa sólida y pertinente para las y los jóvenes de la región. Ubicada estratégicamente en el municipio de Chiautla de Tapia, esta unidad académica ofrece una formación integral que articula el rigor académico con el desarrollo humano y social del estudiantado. El plantel cuenta con una planta docente capacitada y comprometida, especializada en las asignaturas que imparte, lo que garantiza procesos de enseñanza-aprendizaje de calidad. Sus instalaciones incluyen aulas adecuadas, espacios deportivos y áreas de convivencia que favorecen un ambiente escolar respetuoso, seguro y propicio para el aprendizaje. Uno de los principales valores de esta preparatoria es la diversidad de su comunidad estudiantil, integrada por jóvenes provenientes de distintos municipios del estado de Puebla y del estado de Morelos. Esta pluralidad cultural fortalece la convivencia, la tolerancia y el respeto, enriqueciendo la experiencia formativa más allá del aula. A lo largo del ciclo escolar, el alumnado participa en actividades académicas y extracurriculares como torneos deportivos, círculos de lectura, talleres, eventos científicos, pláticas orientadoras y excursiones educativas, lo que contribuye al desarrollo de competencias académicas, sociales y culturales. Estudiar en la Preparatoria Chiautla de Tapia es formarse con identidad, compromiso social y sentido de pertenencia universitaria. Sé Preparatoria Chiautla de Tapia, sé BUAP.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Chiautla",
                "lat" => 18.319386455130093,
                "lng" => -98.61514221075419
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaChiautla/imagen-1.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-2.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-3.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-4.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-5.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-6.png",
                "./assets/unidades_academicas/PrepaChiautla/imagen-7.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/share/17vkRQGZbq/",
                "instagram" => "https://www.instagram.com/crmbuap?igsh=cWM0OHplY3ZqcXcy",
                "web" => "https://crmixteca.buap.mx/"
            ],
        ]
    ),

    "PrepaTlatlauquitepec" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Tlatlauquitepec",
            "nombre_completo" => "Preparatoria Tlatlauquitepec",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria Tlatlauquitepec del Complejo Regional Nororiental es una oportunidad que va más allá de cursar un bachillerato tradicional. Este sistema educativo se distingue por su enfoque de formación universitaria, el cual funciona como una verdadera plataforma de lanzamiento para el éxito académico y profesional de los estudiantes. Respaldada por una planta docente altamente preparada, con formación profesional y experiencia en sus áreas de conocimiento, la preparatoria no solo transmite contenidos, sino que guía a los estudiantes en el desarrollo de habilidades como la autonomía, el pensamiento crítico y la responsabilidad, competencias fundamentales para enfrentar con éxito la universidad y el mundo laboral. Desde su estructura académica hasta su metodología de enseñanza, la institución impulsa a los estudiantes a analizar, reflexionar y asumir un papel activo en su proceso de aprendizaje, promoviendo hábitos de estudio sólidos y una mentalidad orientada al crecimiento académico constante. De manera complementaria, la preparatoria mantiene un fuerte enfoque en la formación cultural, al ofrecer espacios que permiten a los estudiantes expresar y fortalecer su identidad. Destacan los grupos representativos de mariachi y danza, así como diversas actividades culturales que fomentan el aprecio por las tradiciones, la creatividad y la participación artística. Asimismo, la institución impulsa actividades deportivas que contribuyen al desarrollo integral del alumnado, fortaleciendo valores como el trabajo en equipo, la disciplina, el compromiso social y el bienestar físico. La Preparatoria Tlatlauquitepec cuenta con el apoyo de APOED, brindando acompañamiento y orientación educativa a los estudiantes que lo requieren, con el objetivo de favorecer la inclusión, el bienestar académico y la permanencia escolar, asegurando que todos tengan las mismas oportunidades de aprendizaje y desarrollo. No es solo un bachillerato, sino un modelo educativo con proyección universitaria, cultural e inclusiva, que prepara a los estudiantes para sobresalir en la licenciatura, en su vida profesional y en su formación integral como ciudadanos comprometidos. ",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Tlatlauquitepec",
                "lat" => 19.85215886154586,
                "lng" => -97.4955726556099
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaTlatlauquitepec/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=100078804083110",
                "instagram" => "https://www.instagram.com/prepabuap_tlatlauqui/",
                "tiktok" => "https://www.tiktok.com/@prepa_tlatlauqui",
                "web" => null
            ],
        ]
    ),

    "PrepaTeziutlan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Teziutlán",
            "nombre_completo" => "Preparatoria Teziutlán",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Porque estudiar en la Preparatoria Teziutlán del Complejo Regional Nororiental de la BUAP significa elegir una formación sólida, actual y con visión de futuro, en un espacio diseñado para acompañar a los estudiantes en una de las etapas más importantes de su vida académica y personal. Aquí no solo se cursa el bachillerato: los estudiantes se preparan para dar el siguiente gran paso hacia la universidad y el mundo profesional. Formar parte de la BUAP proporciona el respaldo de una institución reconocida a nivel nacional e internacional por su calidad educativa. En la Preparatoria Teziutlán esto se traduce en planes de estudio actualizados, docentes capacitados y comprometidos con el aprendizaje, y un enfoque que impulsa el pensamiento crítico, la responsabilidad y la autonomía. Cada clase busca que los estudiantes comprendan, analicen y apliquen lo aprendido, no solo que memoricen. Además del ámbito académico, la preparatoria promueve una formación integral. A través de actividades culturales, deportivas, científicas y de participación social, se puede descubrir y fortalecer talentos, desarrollar habilidades sociales y aprender a trabajar en equipo. Estas experiencias enriquecen la vida estudiantil y fomentan el crecimiento como persona, no solo como estudiantes. La Preparatoria Teziutlán también se distingue por su sentido de comunidad. Es un espacio cercano, incluyente y respetuoso, donde se fomenta la convivencia, la identidad universitaria y el orgullo de ser parte de la BUAP.  Aquí hay acompañamiento, orientación y un ambiente que impulsa la confianza y la motivación para alcanzar todas las metas. Estudiar aquí es apostar por una educación que abre puertas, que conecta sueños con oportunidades reales y que prepara a nuestros estudiantes para enfrentar los retos del presente y del futuro con seguridad. Preparatoria Teziutlán BUAP: el lugar donde tu talento crece y tu futuro comienza.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Teziutlán",
                "lat" => 19.813294566538183,
                "lng" => -97.37599331407584
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-4.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-5.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-6.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-7.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-8.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-9.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-10.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-11.jpeg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-12.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=61575032305773",
                "instagram" => "https://www.instagram.com/preparatoria_buap_teziutlan/ ",
                "tiktok" => "https://www.tiktok.com/@prepateziutlanbuap?is_from_webapp=1&sender_device=pc"
            ],
        ]
    ),

    "PrepaLibres" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Libres",
            "nombre_completo" => "Preparatoria Libres",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Porque es una institución con una planta docente calificada y comprometida en preparar a sus estudiantes a la etapa superior, en lo académico, lo personal y social teniendo una formación integral por medio de actividades deportivas, culturales y artísticas que les permitirá ser críticos, proactivos, seguros de sí mismos y con valores humanos. La preparatoria cuenta con la infraestructura y recursos académicos que generan un ambiente de aprendizaje y desarrollo favorable para sus estudiantes.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Libres",
                "lat" => 19.464755216120608,
                "lng" => -97.68719493000648
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaLibres/imagen-8.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaLibres/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=100066529942009",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "CabreraTecamachalco" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Enrique Cabrera Barroso (Tecamachalco)",
            "nombre_completo" => "Preparatoria Enrique Cabrera Barroso Tecamachalco",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria Regional Enrique Cabrera Barroso (PRECB) es una institución que tiene una oferta educativa de calidad en el estado de Puebla, pertenece a la Benemérita Universidad Autónoma de Puebla y con sus 53 años de experiencia ha sido germen de muchas generaciones de exitosos egresados y egresadas. La Preparatoria Regional “Enrique Cabrera Barroso” dota a sus estudiantes de conocimientos, habilidades y destrezas indispensables para el ingreso al Nivel Superior o bien para que se inserten la vida laboral; ya que en sus aulas no solo se enseñan declarativos los y las estudiantes aprenden a pensar críticamente y a resolver problemas. A través de sus talleres y actividades extracurriculares, los y las estudiantes tienen la oportunidad de descubrir sus pasiones y áreas de interés. La preparatoria ofrece espacios amplios, limpios y modernos, con los requerimientos necesarios para llevar a cabo el proceso de enseñanza aprendizaje según las exceptivas y demandas de la juventud actual.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Enrique Cabrera Barroso Tecamachalco",
                "lat" => 18.883435738732796, 
                "lng" => -97.74103162953776 
            ],
            "galeria" => [
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-1.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-2.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-3.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-4.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-5.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-6.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-7.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-8.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-9.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-10.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-11.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-12.jpeg",
                "./assets/unidades_academicas/CabreraTecamachalco/imagen-13.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=100083093024654&locale=es_LA",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaChignahuapan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Chignahuapan",
            "nombre_completo" => "Preparatoria Chignahuapan",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria Chignahuapan del Complejo Regional Norte BUAP significa formar parte de una comunidad educativa pública y autónoma comprometida con el desarrollo integral de sus estudiantes. Aquí no solo se adquieren conocimientos académicos sólidos, sino que se impulsa un proyecto formativo con sentido humanista, que reconoce a cada joven como una persona con potencial intelectual, social y emocional. Nuestro enfoque educativo promueve el pensamiento crítico, la reflexión ética y la responsabilidad social, preparando a los estudiantes para comprender su realidad y transformarla de manera positiva. La institución ofrece un entorno donde el aprendizaje va más allá del aula. Se fomenta el desarrollo holístico mediante actividades culturales, científicas, deportivas y artísticas que fortalecen habilidades, talentos y valores. El acompañamiento docente cercano y profesional garantiza una educación de calidad, centrada en el diálogo, la investigación y la participación activa del alumnado. Estudiar aquí es aprender a cuestionar, a argumentar y a construir conocimiento con autonomía. Además, al ser una universidad pública, la preparatoria defiende el acceso equitativo a la educación y promueve una formación inclusiva y plural. Los estudiantes se integran en una comunidad diversa que enriquece su visión del mundo y fortalece su compromiso con la sociedad. Elegir esta preparatoria es apostar por una educación que forma ciudadanos críticos, solidarios y capaces de enfrentar los retos del presente con creatividad, conciencia y liderazgo.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Chignahuapan",
                "lat" => 19.850365808790023,
                "lng" => -98.03385087474136
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-1.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-2.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-3.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-4.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-5.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-6.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-7.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-8.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-9.jpeg",
                "./assets/unidades_academicas/PrepaChignahuapan/imagen-10.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/prepa.buap.chignahuapan",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaVenustianoCarranza" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Venustiano Carranza",
            "nombre_completo" => "Preparatoria Venustiano Carranza",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Elegir la Preparatoria Venustiano Carranza del Complejo Regional Norte BUAP representa una decisión estratégica para aquellos estudiantes que buscan una formación de excelencia respaldada por el prestigio de la máxima casa de estudios del Estado de Puebla. Esta institución se distingue por un ecosistema educativo donde la excelencia académica es el pilar fundamental; prueba de ello es la constante y destacada participación de sus alumnos en concursos de conocimiento, donde demuestran estar a la vanguardia competitiva del Nivel Medio Superior. No obstante, lo que realmente hace única a esta preparatoria es su compromiso con la formación de valores humanos esenciales. En nuestras aulas, trabajamos bajo los principios de igualdad y equidad de género, garantizando un entorno seguro, justo y respetuoso para todos los miembros de la comunidad. Fomentamos la empatía y la inclusión como ejes rectores de la convivencia diaria, asegurando que cada estudiante, sin importar su origen o condición, se sienta valorado y parte de un colectivo unido. Esta solidez ética se complementa con una vibrante vida estudiantil: desde la preservación de nuestras raíces en festividades como el Xantolo, hasta el desarrollo del talento en actividades artísticas y la disciplina demostrada en eventos deportivos, donde orgullosamente ocupamos los primeros lugares. La participación en desfiles y actos públicos refuerza este sentido de pertenencia y liderazgo social. Estudiar en este plantel garantiza un equilibrio perfecto entre el rigor científico, la riqueza cultural y una formación profundamente humana, preparando ciudadanos íntegros, empáticos y listos para transformar positivamente su entorno.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                // "nombre" => "BUAP Preparatoria Venustiano Carranza",
                // "lat" => 20.476484028539016,
                // "lng" => -98.68506656186517
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-7.jpg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-8.jpeg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-9.jpeg",
                "./assets/unidades_academicas/PrepaVenustianoCarranza/imagen-10.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/BUAP.prepa.VenustianoCarranza",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaZacatlan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Zacatlán",
            "nombre_completo" => "Preparatoria Zacatlán",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "En la Preparatoria Zacatlán del Complejo Regional Norte, promovemos la consolidación de un sistema de valores, acorde con la elevada misión de la Benemérita Universidad Autónoma de Puebla, fundamentada en aspectos éticos y sociales, promovemos una formación integral de calidad, que combina excelencia académica con el desarrollo humano. Aquí, los estudiantes no solo aprenden contenidos, sino que desarrollan habilidades críticas como el pensamiento analítico, la creatividad, la comunicación efectiva y el trabajo colaborativo. Además, contamos con un equipo docente altamente capacitado, comprometido con la enseñanza y el acompañamiento personalizado de cada alumno. La experiencia y vocación de nuestros maestros garantizan que el aprendizaje sea significativo, estimulante y adaptado a las necesidades de los jóvenes. De esta manera, cada estudiante encuentra en nuestra institución el apoyo necesario para alcanzar su máximo potencial. Estudiar en nuestra preparatoria significa integrarse a una comunidad educativa que valora la innovación y la excelencia, con programas de orientación vocacional, acceso a tecnologías de vanguardia y actividades que impulsan la creatividad, nuestros alumnos se preparan para continuar con éxito sus estudios en el Nivel Superior.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Zacatlán",
                "lat" => 19.92688215443199,
                "lng" => -97.975292905653
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaZacatlan/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-7.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-8.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-9.jpg",
                "./assets/unidades_academicas/PrepaZacatlan/imagen-10.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/Buap.Zacatlan",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "AlfonsoCalderonPuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Alfonso Calderón Moreno",
            "nombre_completo" => "Preparatoria Alfonso Calderón Moreno",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria Alfonso Calderón Moreno (BUAP) es elegir un espacio que combina formación académica sólida, vida estudiantil activa y un sentido claro de pertenencia universitaria. Aquí, la excelencia no se queda en el discurso: se vive en aulas donde se impulsa el pensamiento crítico, la disciplina de estudio y el acompañamiento cercano de docentes y tutores, con metas altas y resultados que se reflejan en el desempeño de nuestra comunidad. Uno de nuestros orgullos es la pista de atletismo con estándares internacionales, un entorno que eleva la educación física y el deporte a un nivel profesional. No se trata solo de “hacer ejercicio”: es entrenar con condiciones dignas, seguras y de calidad, desarrollar hábitos saludables y fortalecer valores como constancia, trabajo en  equipo y liderazgo. La pista se convierte en punto de encuentro para talentos deportivos y para quienes buscan un estilo de vida activo. Además, la Prepa Calderón ofrece actividades académicas, culturales, recreativas y de participación estudiantil que enriquecen tu experiencia: concursos, proyectos, ferias temáticas, eventos artísticos, deporte representativo, comités de organización y acciones de convivencia que fortalecen habilidades sociales y comunicativas. En cada actividad hay una oportunidad de descubrir tus intereses, ganar confianza y construir amistades. Estudiar aquí también significa tener acceso a orientación y apoyos institucionales, con una comunidad que promueve el respeto, la igualdad y la sana convivencia. Esta preparatoria te prepara para la universidad y para la vida: con conocimiento, identidad BUAP, experiencias memorables y espacios que inspiran a dar lo mejor de ti. También contamos con actividades y proyección: orientación vocacional, difusión de becas, talleres de bienestar, campañas solidarias y espacios de participación como la Unidad de Género y comités estudiantiles. Todo esto te permite aprender haciendo, asumir responsabilidades reales y sentir que tu voz cuenta dentro de la comunidad",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Alfonso Calderón Moreno",
                "lat" => 19.066208023372155,
                "lng" => -98.153538159602
            ],
            "galeria" => [
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-1.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-2.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-3.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-4.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-5.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-6.png",
                "./assets/unidades_academicas/AlfonsoCalderonPuebla/imagen-7.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/PrepaCalderon.Oficial?locale=es_LA",
                "instagram" => "https://www.instagram.com/prepacalderonbuap/?hl=es",
                "web" => null
            ],
        ]
    ),

    "SimonBolivarAtlixco" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Simón Bolivar (Atlixco)",
            "nombre_completo" => "Preparatoria Simón Bolivar (Atlixco)",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria Regional Simón Bolívar es un referente en primera opción por ser una institución educativa que ofrece educación de calidad y formación integral para los estudiantes, permitiendo a la vez el desarrollo de habilidades blandas, a través de diversas actividades extracurriculares, ambiente de aprendizaje positivo y estimulante, contamos con planes de estudio actualizados y ofrece diferentes áreas de formación propedéutica como Ciencias sociales y Económico Administrativas, Comunicación, Humanidades, Ingeniería y Ciencias exactas así como Ciencias Naturales y de la salud. Los estudiantes han destacado académicamente en Olimpiadas de conocimiento en el área de matemáticas y Filosofía, por mencionar algunas, y deportivamente en varias disciplinas, reflejando el esfuerzo y dedicación de la comunidad educativa. Contamos con una planta docente en constante preparación y actualización educativa, con el perfil requerido para impartir las asignaturas en las diferentes academias, con grados académicos que van desde licenciatura, maestrías y doctorados. Nuestras instalaciones tienen la infraestructura adecuada para recibir y compartir los conocimientos en los procesos de enseñanza-aprendizaje, y su personal de apoyo brinda atención inmediata a las necesidades de la comunidad de la preparatoria. Nuestro objetivo es formar jóvenes estudiantes íntegros en conocimientos y valores y con un sentido muy humano y de responsabilidad que los preparen para enfrentar los retos y desafíos que demanda una sociedad cambiante donde seguramente les tocará transitar como profesionistas.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Simón Bolivar (Atlixco)",
                "lat" => 18.906904849517964,
                "lng" => -98.40526754232992
            ],
            "galeria" => [
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-1.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-2.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-3.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-4.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-5.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-6.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-7.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-8.jpg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-9.png",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-10.jpeg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-11.jpeg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-12.jpeg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-13.png",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => "https://simonbolivar.buap.mx"
            ],
        ]
    ),

    "ZapataPuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Gral. Emiliano Zapata Salazar",
            "nombre_completo" => "Preparatoria Gral. Emiliano Zapata Salazar",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Los egresados de la Emiliano Zapata hoy se encuentran desempeñando importantes puestos en la política, la banca, el comercio, la cultura, la ciencia y la industria en Puebla y en México. Lo que aporta un beneficio para la sociedad global, la cual espera de nuestros egresados el mejor rendimiento académico y laboral. En el panorama general de las preparatorias universitarias, nuestros ex alumnos, han obtenido siempre los primeros lugares en el rendimiento escolar en cuanto a su ingreso a las unidades académicas profesionales. Ser egresado de la preparatoria Emiliano Zapata tiene la impronta de un alumnado crítico, reflexivo, propositivo y pensante. Valores educativos que se trabajan todos los días en nuestros salones de clases.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Gral. Emiliano Zapata Salazar",
                "lat" => 19.04346052231807,
                "lng" => -98.19524986606555
            ],
            "galeria" => [],
            "redes" => [
                "facebook" => "https://www.facebook.com/prepazapatabuap",
                "instagram" => "https://www.instagram.com/prepazapata_buap/",
                "web" => null,
            ],
        ]
    ),

    "PrepaZapataSanMartin" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Gral. Emiliano Zapata (San Martín Texmelucan)",
            "nombre_completo" => "Preparatoria Gral. Emiliano Zapata (San Martín Texmelucan)",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Los egresados de la Emiliano Zapata hoy se encuentran desempeñando importantes puestos en la política, la banca, el comercio, la cultura, la ciencia y la industria en Puebla y en México. Lo que aporta un beneficio para la sociedad global, la cual espera de nuestros egresados el mejor rendimiento académico y laboral. En el panorama general de las preparatorias universitarias, nuestros ex alumnos, han obtenido siempre los primeros lugares en el rendimiento escolar en cuanto a su ingreso a las unidades académicas profesionales. Ser egresado de la preparatoria Emiliano Zapata tiene la impronta de un alumnado crítico, reflexivo, propositivo y pensante. Valores educativos que se trabajan todos los días en nuestros salones de clases.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Gral. Emiliano Zapata (San Martín Texmelucan)",
                "lat" => 19.302637552556433,
                "lng" => -98.42797730305296
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaZapataSanMartin/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/prepazapata.texmelucan",
                "instagram" => "https://www.instagram.com/pezsnmartintex/",
                "tiktok" => "https://www.tiktok.com/@pezsanmartin"
            ],
        ]
    ),

    "BT5DeMayo" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Programa Bachillerato Internacional",
            "nombre_corto" => "Bachillerato 5 de Mayo",
            "nombre_completo" => "Bachillerato 5 de Mayo",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_BI,
            "areas_propedeuticas" => $GRUPOS_ASIGNATURAS_BI,
            "tronco_comun" => [],
            "porque_estudiar" => "Por su naturaleza curricular y pedagógica, el Programa del Diploma (PD) del Bachillerato Internacional (BI), es un programa educativo riguroso, desafiante académicamente y equilibrado en la formación integral del estudiantado. Este bachillerato resulta una experiencia educativa única, diseñada para formar personas perspicaces y de mente abierta, de modo que se les impulsa a generar colaboración intercultural, ser críticos y responsables, aportando soluciones a problemas complejos que aquejan a toda la humanidad. El enfoque holístico que presenta el modelo, incentiva a convertirse en generador de conocimiento a partir del desarrollo de diversas investigaciones en cada una de sus asignaturas, a la par de comprender la interconexión entre éstas y la realidad, fomentando una preparación para la educación superior y el mundo laboral, permitiendo una reflexión en torno a la relación entre su conocimiento y sus vivencias. Teoría del Conocimiento (TdC), Monografía y Creatividad, Actividad y Servicio (CAS), son un aspecto identitario y diferenciador del resto de programas educativos. Estos troncales presentan entre ellos una interacción dinámica que desafía a los estudiantes a cuestionar la naturaleza, los límites y las formas de conocimiento desde una perspectiva epistémico-social, a indagar teórica y metodológicamente un aspecto del mundo que sea de su interés y acortar las brechas entre el aprendizaje académico y experiencia propia. Todo lo anterior garantiza que el estudiantado se destaque académicamente tras una certificación internacional de su Nivel Medio Superior, a la par de que desarrolla competencias transversales –como habilidades comunicacionales e investigativas, de autoregulación emocional, gestión de tiempo y autodisciplina. Aunado a lo anterior, el PD del BI es aceptado por las universidades más prestigiosas del mundo, lo que ofrece al estudiantado una ventaja competitiva en sus proyectos futuros, además de que, como egresados, forman parte de una comunidad internacional de estudiantes BI y BUAP, preparados para afrontar retos actuales.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato 5 de Mayo",
                "lat" => 19.08383108357366,
                "lng" => -98.26544016710511
            ],
            "galeria" => [
                "./assets/unidades_academicas/BT5DeMayo/imagen-1.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-2.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-3.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-4.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-5.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-6.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-7.jpg",
                "./assets/unidades_academicas/BT5DeMayo/imagen-8.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=100057376994303",
                "instagram" => "https://www.instagram.com/bachillerato5demayo/",
                "tiktok" => "https://www.tiktok.com/@bachillerato.5.de3?is_from_webapp=1&sender_device=pc",
                "web" => "https://b5m.buap.mx/"
            ],
        ]
    ),

    "PrepaCoyomeapan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Coyomeapan",
            "nombre_completo" => "Preparatoria Coyomeapan",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en las Preparatorias BUAP del Complejo Regional Sur significa formarte en una institución. pública con respaldo universitario, donde la enseñanza está orientada a desarrollar pensamiento crítico, habilidades de comunicación y bases académicas firmes para continuar estudios superiores. Al pertenecer a la BUAP, el alumnado se integra a un entorno con enfoque universitario desde el bachillerato, lo que favorece una transición más natural hacia licenciaturas y una mayor claridad en su proyecto de vida. Los planteles impulsa no solo el aprendizaje en el aula, sino también la participación en actividades culturales, académicas y deportivas que fortalecen el trabajo en equipo, la responsabilidad y el liderazgo. Su presencia en el sur del estado permite que jóvenes de la Region y municipios cercanos accedan a educación de calidad sin tener que desplazarse a otras ciudades, lo que amplía oportunidades educativas. Además, el crecimiento de sus instalaciones y su consolidación como parte del Complejo Regional Sur reflejan un compromiso continuo con mejores espacios y recursos para el aprendizaje. En conjunto, en las Preparatorias BUAP, en conjunto, representa una opción educativa sólida para quienes buscan una trayectoria académica consistente y una transición natural hacia estudios superiores.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Coyomeapan",
                "lat" => 18.289200958360258,
                "lng" => -96.99700487830727
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-1.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-2.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-3.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-4.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-5.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-6.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-7.png",
                "./assets/unidades_academicas/PrepaCoyomeapan/imagen-8.png",
            ],
            "redes" => [
                "facebook" => "",
                "instagram" => "https://www.instagram.com/buap.crs/",
                "tiktok" => "https://www.tiktok.com/@crsbuap",
                "web" => ""
            ],
        ]
    ),

    "PrepaTehuacan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Tehuacan",
            "nombre_completo" => "Preparatoria Tehuacan",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en las Preparatorias BUAP del Complejo Regional Sur significa formarte en una institución. pública con respaldo universitario, donde la enseñanza está orientada a desarrollar pensamiento crítico, habilidades de comunicación y bases académicas firmes para continuar estudios superiores. Al pertenecer a la BUAP, el alumnado se integra a un entorno con enfoque universitario desde el bachillerato, lo que favorece una transición más natural hacia licenciaturas y una mayor claridad en su proyecto de vida. Los planteles impulsa no solo el aprendizaje en el aula, sino también la participación en actividades culturales, académicas y deportivas que fortalecen el trabajo en equipo, la responsabilidad y el liderazgo. Su presencia en el sur del estado permite que jóvenes de la Region y municipios cercanos accedan a educación de calidad sin tener que desplazarse a otras ciudades, lo que amplía oportunidades educativas. Además, el crecimiento de sus instalaciones y su consolidación como parte del Complejo Regional Sur reflejan un compromiso continuo con mejores espacios y recursos para el aprendizaje. En conjunto, en las Preparatorias BUAP, en conjunto, representa una opción educativa sólida para quienes buscan una trayectoria académica consistente y una transición natural hacia estudios superiores.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Tehuacan",
                "lat" => 18.41789493675063,
                "lng" => -97.36434057033742
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaTehuacan/imagen-1.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-2.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-3.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-4.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-5.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-6.png",
                "./assets/unidades_academicas/PrepaTehuacan/imagen-7.png",
            ],
            "redes" => [
                "facebook" => "",
                "instagram" => "https://www.instagram.com/buap.crs/",
                "tiktok" => "https://www.tiktok.com/@crsbuap",
                "web" => ""
            ],
        ]
    ),

    "PrepaTlacotepec" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Tlacotepec",
            "nombre_completo" => "Preparatoria Tlacotepec",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en las Preparatorias BUAP del Complejo Regional Sur significa formarte en una institución. pública con respaldo universitario, donde la enseñanza está orientada a desarrollar pensamiento crítico, habilidades de comunicación y bases académicas firmes para continuar estudios superiores. Al pertenecer a la BUAP, el alumnado se integra a un entorno con enfoque universitario desde el bachillerato, lo que favorece una transición más natural hacia licenciaturas y una mayor claridad en su proyecto de vida. Los planteles impulsa no solo el aprendizaje en el aula, sino también la participación en actividades culturales, académicas y deportivas que fortalecen el trabajo en equipo, la responsabilidad y el liderazgo. Su presencia en el sur del estado permite que jóvenes de la Region y municipios cercanos accedan a educación de calidad sin tener que desplazarse a otras ciudades, lo que amplía oportunidades educativas. Además, el crecimiento de sus instalaciones y su consolidación como parte del Complejo Regional Sur reflejan un compromiso continuo con mejores espacios y recursos para el aprendizaje. En conjunto, en las Preparatorias BUAP, en conjunto, representa una opción educativa sólida para quienes buscan una trayectoria académica consistente y una transición natural hacia estudios superiores.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Tlacotepec",
                "lat" => 18.667797652925053,
                "lng" => -97.63800238058445
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-1.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-2.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-3.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-4.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-5.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-6.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-7.png",
                "./assets/unidades_academicas/PrepaTlacotepec/imagen-8.png",
            ],
            "redes" => [
                "facebook" => "",
                "instagram" => "https://www.instagram.com/buap.crs/",
                "tiktok" => "https://www.tiktok.com/@crsbuap",
                "web" => ""
            ],
        ]
    ),

    "PrepaVicenteGuerrero" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Vicente Guerrero",
            "nombre_completo" => "Preparatoria Vicente Guerrero",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en las Preparatorias BUAP del Complejo Regional Sur significa formarte en una institución. pública con respaldo universitario, donde la enseñanza está orientada a desarrollar pensamiento crítico, habilidades de comunicación y bases académicas firmes para continuar estudios superiores. Al pertenecer a la BUAP, el alumnado se integra a un entorno con enfoque universitario desde el bachillerato, lo que favorece una transición más natural hacia licenciaturas y una mayor claridad en su proyecto de vida. Los planteles impulsa no solo el aprendizaje en el aula, sino también la participación en actividades culturales, académicas y deportivas que fortalecen el trabajo en equipo, la responsabilidad y el liderazgo. Su presencia en el sur del estado permite que jóvenes de la Region y municipios cercanos accedan a educación de calidad sin tener que desplazarse a otras ciudades, lo que amplía oportunidades educativas. Además, el crecimiento de sus instalaciones y su consolidación como parte del Complejo Regional Sur reflejan un compromiso continuo con mejores espacios y recursos para el aprendizaje. En conjunto, en las Preparatorias BUAP, en conjunto, representa una opción educativa sólida para quienes buscan una trayectoria académica consistente y una transición natural hacia estudios superiores.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Vicente Guerrero",
                "lat" => 18.538252130883237,
                "lng" => -97.2021845567444
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaVicenteGuerrero/imagen-1.png",
                "./assets/unidades_academicas/PrepaVicenteGuerrero/imagen-2.png",
                "./assets/unidades_academicas/PrepaVicenteGuerrero/imagen-3.png",
                "./assets/unidades_academicas/PrepaVicenteGuerrero/imagen-4.png",
                "./assets/unidades_academicas/PrepaVicenteGuerrero/imagen-5.png",
            ],
            "redes" => [
                "facebook" => "",
                "instagram" => "https://www.instagram.com/buap.crs/",
                "tiktok" => "https://www.tiktok.com/@crsbuap",
                "web" => ""
            ],
        ]
    ),

    "CabreraPuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Urbana Enrique Cabrera Barroso",
            "nombre_completo" => "Preparatoria Urbana Enrique Cabrera Barroso",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Cuando se habla de las escuelas de la BUAP, el nombre de la Preparatoria Urbana “Enrique Cabrera Barroso” tiene un lugar especial, propicia que muchos estudiantes ingresen al nivel superior en muchas universidades importantes de México. Su valor consiste en prepararlos para desarrollarse en los ámbitos profesionales y también en la vida cotidiana, generando habilidades críticas, disciplina, ética y valores humanos que los hace ciudadanos propositivos y aptos para lograr metas que generen una mejor sociedad. La metodología en el proceso de la enseñanza en la Preparatoria Urbana “Enrique Cabrera Barroso” tiene un enfoque de aprendizaje activo. No todo es escuchar al profe, se participa en olimpiadas del conocimiento, proyectos de investigación y debates, estas actividades desarrollan lo que de verdad importa en el mundo laboral; resolver problemas, comunicar ideas y trabajar en equipo. El perfil de ingreso para las Preparatorias BUAP consiste en que las y los aspirantes al bachillerato de la BUAP cuenten con la disposición de transformarse en personas independientes y capaces de generar un cambio personal para el bienestar de la comunidad. El perfil de egreso tiene como objetivo, generar el conocimiento y comprensión de sí mismos, una formación académica en avances científicos y tecnológicos permitiendo una visión interdisciplinaria e integral que los hará sensibles a las problemáticas sociales, económicas, políticas, éticas, estéticas y ecológicas, que lo preparan para su ingreso al nivel superior;  que sean capaces de interactuar en equipo, con una actitud fraterna, libre, justa, pacífica, tolerante y de respeto a la pluralidad. Los egresados de la Preparatoria Urbana “Enrique Cabrera Barroso” poseen conocimientos, habilidades, actitudes y valores para enfrentar el futuro.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Urbana Enrique Cabrera Barroso",
                "lat" => 19.003976017827807,
                "lng" => -98.19486763533435
            ],
            "galeria" => [
                "./assets/unidades_academicas/CabreraPuebla/imagen-1.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-2.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-3.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-4.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-5.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-6.jpeg",
                "./assets/unidades_academicas/CabreraPuebla/imagen-7.jpeg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "BenitoPuebla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Lic. Benito Juárez García",
            "nombre_completo" => "Preparatoria Lic. Benito Juárez García",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria Licenciado Benito Juárez García de la Benemérita Universidad Autónoma de Puebla es una de las mejores decisiones para cualquier estudiante que busque excelencia académica, formación integral y prestigio institucional, ya que es la preparatoria más antigua de la universidad y cuenta con una sólida trayectoria formando generaciones exitosas. Su reconocimiento no solo se basa en su historia, sino en sus resultados académicos, con altos índices de eficiencia terminal y un desempeño destacado en evaluaciones, reflejo del compromiso de su planta docente, integrada por profesores capacitados que brindan asesorías, acompañamiento y orientación personalizada para potenciar el aprendizaje. Además, sus estudiantes han sobresalido en olimpiadas del conocimiento en áreas como química, matemáticas y ciencias, demostrando un fuerte impulso al pensamiento crítico y la investigación. En el ámbito deportivo, la institución también destaca por la obtención de medallas y reconocimientos en competencias estatales y nacionales en disciplinas como karate, atletismo, béisbol, basquetbol y voleibol, promoviendo valores como disciplina, constancia y trabajo en equipo. A esto se suma su infraestructura, con aulas equipadas, laboratorios para prácticas científicas, espacios deportivos, áreas culturales y recursos tecnológicos que favorecen un ambiente óptimo para el aprendizaje y el desarrollo integral. Asimismo, ofrece actividades culturales, artísticas y científicas que fortalecen habilidades sociales, liderazgo y responsabilidad. Todo ello convierte a esta preparatoria en una opción ideal para quienes desean ingresar bien preparados a la universidad y enfrentar con éxito los retos profesionales futuros, respaldados por el prestigio y la calidad educativa que distinguen a la BUAP.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Lic. Benito Juárez García",
                "lat" => 19.01782428393198,
                "lng" => -98.20152799317391
            ],
            "galeria" => [
                "./assets/unidades_academicas/BenitoPuebla/imagen-1.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-2.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-3.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-4.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-5.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-6.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-7.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-8.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-9.jpg",
                "./assets/unidades_academicas/BenitoPuebla/imagen-10.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/oficialprepabenitobuap",
                "instagram" => "https://www.instagram.com/prepabenitojg/",
                "web" => null
            ],
        ]
    ),

    "PrepaAcajete" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Acajete (CRC)",
            "nombre_completo" => "Preparatoria Acajete (CRC)",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Siguiendo altos estándares de calidad educativa, la Preparatoria Acajete, perteneciente al Complejo Regional Centro de la Benemérita Universidad Autónoma de Puebla, te ofrece una formación integral que impulsa tu desarrollo académico, personal y social. Ten por seguro que descubrirás qué es lo que te apasiona, con la certeza de que obtendrás la mejor preparación para la universidad. La Preparatoria Acajete se distingue por contar con docentes altamente capacitados, programas académicos actualizados y un ambiente que fomenta valores, pensamiento crítico y responsabilidad social. Además, al formar parte de la BUAP, tendrás acceso a actividades culturales, deportivas y científicas que enriquecerán tu experiencia estudiantil y te permitirán construir bases sólidas para tu futuro profesional.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Acajete (CRC)",
                "lat" => 19.095992702090463,
                "lng" => -97.94968028950163
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaAcajete/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaAcajete/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/PrepRegAcajeteBUAP?locale=es_LA",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaAcatzingo" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Acatzingo",
            "nombre_completo" => "Preparatoria Acatzingo",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria Acatzingo, perteneciente a la Benemérita Universidad Autónoma de Puebla (BUAP), ofrece una educación de calidad que prepara a los estudiantes para ser competitivos. Al estudiar en esta institución, los alumnos tienen la oportunidad de formar parte de la comunidad universitaria de la BUAP, accediendo a una amplia gama de recursos y oportunidades académicas. Además, la Preparatoria Acatzingo ha demostrado un compromiso con la excelencia educativa, como lo evidencian los logros de sus estudiantes en competencias tecnológicas, olimpiadas estatales de Biología y Filosofía, obteniendo primeros lugares en diversas categorías. La institución también se preocupa por el bienestar económico de sus alumnos, informando sobre becas disponibles, como la Beca Universal de Educación Media Superior “Benito Juárez”, destinada a estudiantes de preparatorias públicas.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Acatzingo",
                "lat" => 18.995278672438335,
                "lng" => -97.79583089423843
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaAcatzingo/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaAcatzingo/imagen-2.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/crc.acatzingo",
                "instagram" => "https://www.instagram.com/prepa_acat_buap?igsh=MWFnZHFnc2JiOXJjbw%3D%3D&utm_source=qr",
                "web" => null
            ],
        ]
    ),

    "PrepaAmozoc" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Amozoc",
            "nombre_completo" => "Preparatoria Amozoc",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "* Reconocimiento Académico: Nuestra preparatoria es reconocida por su excelencia académica, lo que garantiza una educación de alta calidad que prepara a los estudiantes para el futuro. * Amplia Oferta Educativa: Nuestros programas y asignaturas permiten a los estudiantes explorar sus intereses y talentos, desde ciencias hasta humanidades. * Preparación para la Educación Superior: La preparatoria está alineada con los requisitos y estándares de la Educación Superior, facilitando esta transición a la educación superior. * Actividades Extracurriculares: Los estudiantes pueden participar en diversas actividades deportivas, culturales y artísticas que fomentan el desarrollo integral y el trabajo en equipo. * Ambiente Inclusivo y Diverso: La Preparatoria BUAP de Amozoc promueve un ambiente donde todos los estudiantes son bienvenidos, fomentando el respeto y la diversidad. * Apoyo Académico y Personal: Contamos con personal docente capacitado y programas de tutoría que ayudan a los estudiantes a alcanzar su máximo potencial, tanto académica como personalmente. * Ubicación Estratégica: Somos la sede más cercana a la Ciudad de Puebla lo que facilita el acceso para muchos estudiantes y hace más cómodo su traslado diario.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Amozoc",
                "lat" => 19.049400548984035,
                "lng" => -98.05576285356811
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaAmozoc/imagen-1.png",
                "./assets/unidades_academicas/PrepaAmozoc/imagen-2.png",
                "./assets/unidades_academicas/PrepaAmozoc/imagen-3.png",
                "./assets/unidades_academicas/PrepaAmozoc/imagen-4.png",
                "./assets/unidades_academicas/PrepaAmozoc/imagen-5.png",
                "./assets/unidades_academicas/PrepaAmozoc/imagen-6.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/CRCAmozocBUAP?locale=es_LA",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaSerdan" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Ciudad Serdán",
            "nombre_completo" => "Preparatoria Ciudad Serdán",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Elegir una institución educativa es una de las decisiones más importantes en la formación académica y personal, ya que de ella depende en gran medida el desarrollo de conocimientos, habilidades y valores que acompañarán al estudiante a lo largo de su vida. Por esta razón, considero que estudiar en esta escuela representa una excelente oportunidad de crecimiento integral, debido a su prestigio, calidad académica y ambiente formativo. Esta institución es reconocida a nivel estatal como una de las escuelas con mayor prestigio y nivel educativo, lo cual refleja su compromiso constante con la excelencia académica. Dicho reconocimiento se sustenta en la preparación y profesionalismo de sus docentes, quienes cuentan con la capacitación necesaria para guiar de manera efectiva el proceso de enseñanza-aprendizaje, fomentando el pensamiento crítico, la participación activa y el interés por el conocimiento. Otro aspecto fundamental es el ambiente escolar, el cual se caracteriza por ser tranquilo, respetuoso y propicio para el aprendizaje. Este entorno favorece la convivencia sana entre estudiantes y docentes, permitiendo que el alumnado se desarrolle con confianza, seguridad y motivación para alcanzar sus objetivos académicos. La escuela también destaca por su infraestructura, ya que cuenta con laboratorios de física, química y cómputo, espacios que permiten reforzar los conocimientos teóricos a través de la práctica. Estas instalaciones contribuyen significativamente a una comprensión más profunda de los contenidos, facilitando el aprendizaje significativo y el desarrollo de habilidades técnicas y científicas. Asimismo, las instalaciones son de nueva creación y están diseñadas con una visión de crecimiento continuo, lo que garantiza espacios modernos, funcionales y adecuados para las necesidades actuales y futuras de la comunidad estudiantil. Finalmente, los planes de estudio se encuentran estructurados bajo un modelo semestral basado en competencias, integrando áreas del conocimiento y materias complementarias. Este enfoque busca desarrollar actitudes, habilidades y valores, promoviendo una formación integral que combina una sólida preparación académica con el desarrollo personal y la responsabilidad social, formando estudiantes comprometidos con su entorno y su futuro.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Ciudad Serdán",
                "lat" => 18.97961438335572,
                "lng" => -97.45216367487116
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaSerdan/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-6.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-7.jpg",
                "./assets/unidades_academicas/PrepaSerdan/imagen-8.jpg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/SerdanCRC?locale=es_LA",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaTepeaca" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Tepeaca",
            "nombre_completo" => "Preparatoria Tepeaca",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria Tepeaca del Complejo Regional Centro, es una excelente decisión para quienes buscan una formación académica sólida y con respaldo institucional. Este plantel forma parte de la Benemérita Universidad Autónoma de Puebla (BUAP), una de las universidades públicas más reconocidas del país, lo que garantiza una excelente calidad educativa. Elegir esta preparatoria significa que vas a acceder a una educación media superior de calidad, con docentes altamente capacitados y planes de estudio alineados a los estándares académicos de la BUAP. Además, al pertenecer a una universidad de prestigio, los estudiantes se familiarizan desde temprana edad con un ambiente universitario que fomenta la responsabilidad, el pensamiento crítico y la preparación para continuar estudios superiores. En esta preparatoria, no solo nos enfocamos en fomentar la educación basada en el aprendizaje académico, sino también en el desarrollo de habilidades como el pensamiento crítico, la responsabilidad, el trabajo en equipo y la formación en valores. Además, promueve actividades culturales, deportivas y académicas que fortalecen el crecimiento personal de los estudiantes. Otro aspecto importante que podemos resaltar para elegir esta preparatoria es que su ubicación en el municipio de Tepeaca, permite a los jóvenes continuar con sus estudios cerca de su comunidad, sin la necesidad de tener que trasladarse a la ciudad, reduciendo así gastos de traslado y manteniendo el vínculo cercano a su entorno familiar y social. Además, sus costos son accesibles, lo que permite que la comunidad estudiantil, pueda continuar con sus estudios. Esto convierte a la preparatoria en una alternativa inclusiva y comprometida con el derecho a la educación. Finalmente, estudiar en esta preparatoria significa formar parte de una institución con prestigio, compromiso social y reconocimiento oficial. Es una opción que brinda herramientas sólidas para construir un proyecto de vida exitoso y prepararse de manera adecuada para los retos académicos y profesionales del futuro.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Tepeaca",
                "lat" => 18.99331540624872,
                "lng" => -97.90115705982899
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaTepeaca/imagen-1.png",
                "./assets/unidades_academicas/PrepaTepeaca/imagen-2.png",
                "./assets/unidades_academicas/PrepaTepeaca/imagen-3.png",
                "./assets/unidades_academicas/PrepaTepeaca/imagen-4.png",
                "./assets/unidades_academicas/PrepaTepeaca/imagen-5.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/ComplejoRegionalCentrosedeTepeaca?locale=es_LA",
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "PrepaElSeco" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. San Salvador El Seco",
            "nombre_completo" => "Preparatoria San Salvador El Seco",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "Estudiar en la Preparatoria BUAP Campus San Salvador El Seco representa una oportunidad educativa de alto valor tanto para jóvenes de este municipio como de las comunidades cercanas. Esta unidad forma parte del Complejo Regional Centro de la Benemérita Universidad Autónoma de Puebla (BUAP), una institución pública reconocida en todo el estado por su compromiso con la calidad académica y la formación integral de sus estudiantes. Una de las principales ventajas de elegir esta preparatoria es su ubicación geográfica estratégica: al estar dentro de San Salvador El Seco, los estudiantes pueden cursar sus estudios de nivel medio superior sin tener que desplazarse largas distancias a la ciudad de Puebla u otros municipios, lo que reduce gastos y facilita la permanencia en el sistema educativo para quienes tienen responsabilidades familiares o laborales. Además, el hecho de estar adscrita a la BUAP significa que la preparatoria cuenta con respaldo educativo y académico de una universidad pública consolidada, con estándares que favorecen una formación sólida en áreas fundamentales para la educación media superior. Esto incluye acceso a un currículo alineado con exigencias modernas y personal docente calificado, lo cual prepara a los estudiantes de forma competitiva para continuar sus estudios superiores. La presencia de este campus también contribuye al desarrollo social y cultural de la región, convirtiéndose en un punto de encuentro donde los jóvenes no solo adquieren conocimientos, sino también valores, habilidades y experiencias que fortalecen su identidad y su sentido de pertenencia comunitaria. Estudiar aquí es, por tanto, una forma de invertir en tu futuro académico y profesional mientras contribuyes al desarrollo local.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria San Salvador El Seco",
                "lat" => 19.144461451931516,
                "lng" => -97.63526231012277
            ],
            "galeria" => [
                "./assets/unidades_academicas/PrepaElSeco/imagen-1.png",
                "./assets/unidades_academicas/PrepaElSeco/imagen-2.png",
                "./assets/unidades_academicas/PrepaElSeco/imagen-3.png",
                "./assets/unidades_academicas/PrepaElSeco/imagen-4.png",
                "./assets/unidades_academicas/PrepaElSeco/imagen-5.png",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/CRCElSeco?locale=es_LA",
                "instagram" => "https://www.instagram.com/buap_crc_el_seco/",
                "web" => null
            ],
        ]
    ),

    "BTZacachimalpa" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Bachilleratos Tecnológicos",
            "nombre_corto" => "Bachillerato Tecnológico San Pedro Zacachimalpa",
            "nombre_completo" => "Bachillerato Tecnológico San Pedro Zacachimalpa",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_BT_COMUN,
            "tronco_comun" => [],
            "areas_propedeuticas" => [],
            "nuestra_oferta_educativa" => $OFERTA_ZACACHIMALPA,
            "porque_estudiar" => "Estudiar en el Bachillerato Tecnológico representa una etapa fundamental en la formación académica y personal de las y los estudiantes, ya que brinda la oportunidad de prepararse de manera integral para los retos de la vida actual. Esta modalidad educativa no solo fortalece los conocimientos generales en áreas como matemáticas, ciencias, comunicación y humanidades, sino que también permite adquirir competencias técnicas especializadas que responden a las necesidades del entorno laboral y social. A lo largo de su formación, la comunidad estudiantil desarrolla habilidades prácticas, pensamiento crítico, trabajo en equipo y responsabilidad, elementos esenciales para desempeñarse con éxito en distintos ámbitos. El enfoque tecnológico les acerca a herramientas, procesos y conocimientos propios de un campo profesional específico, lo que facilita su inserción en el mercado laboral al concluir los estudios. De esta manera, se cuenta con una preparación que permite generar ingresos, adquirir experiencia y contribuir al desarrollo de la comunidad. Además, el Bachillerato Tecnológico no limita las posibilidades académicas, sino que las amplía. Al concluir esta etapa, las y los estudiantes pueden decidir continuar con estudios superiores en universidades o institutos tecnológicos, aprovechando la base sólida que han construido. La formación recibida orienta mejor en la elección de una carrera profesional, pues se cuenta con una idea más clara de habilidades, intereses y metas. En conclusión, estudiar en el Bachillerato Tecnológico proporciona herramientas académicas, técnicas y personales que fortalecen el proyecto de vida, abriendo puertas tanto en el ámbito laboral como en el educativo.",
            "perfil_ingreso" => "BTAZ",
            "perfil_egreso" => "BTAZ",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato Tecnológico San Pedro Zacachimalpa",
                "lat" => 18.9375887440641,
                "lng" => -98.15718618510564
            ],
            "galeria" => [
                "./assets/unidades_academicas/BTZacachimalpa/imagen-1.jpg",
                "./assets/unidades_academicas/BTZacachimalpa/imagen-2.jpg",
                "./assets/unidades_academicas/BTZacachimalpa/imagen-3.jpg",
                "./assets/unidades_academicas/BTZacachimalpa/imagen-4.jpg",
                "./assets/unidades_academicas/BTZacachimalpa/imagen-5.jpg",
                "./assets/unidades_academicas/BTZacachimalpa/imagen-6.jpg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "tiktok" => null,
                "web" => null
            ],
        ]
    ),

    "BTSanJoseChiapa" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Bachilleratos Tecnológicos",
            "nombre_corto" => "Bachillerato Tecnológico San José Chiapa (CRC)",
            "nombre_completo" => "Bachillerato Tecnológico San José Chiapa (CRC)",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_BT_COMUN,
            "tronco_comun" => [],
            "areas_propedeuticas" => [],
            "nuestra_oferta_educativa" => $OFERTA_SAN_JOSE_CHIAPA,
            "porque_estudiar" => "El Bachillerato Tecnológico de San José Chiapa forma parte del Complejo Regional Centro de la BUAP y está ubicado en la Capital de la Tecnología y la Sostenibilidad, San José Chiapa. Este plantel atiende a estudiantes de diversos municipios cercanos a la zona de Audi, donde se ha dado un desarrollo industrial importante. Su plan de estudios está alineado a los programas de ingeniería que se imparten en la sede como son Ingeniería en Automatización y Autotrónica (IAA), Ingeniería en Sistemas y Tecnologías de Información Industrial (ISTII), Ingeniería en Procesos de Gestión Industriales (IPGI) e Ingeniería en Tecnologías de Semiconductores, lo que permite a los estudiantes incorporarse con mayor facilidad no sólo al ámbito académico sino al ámbito laboral, ya que prepara a los estudiantes para desempeñarse en roles tecnológicos a un nivel técnico dentro del sector productivo en áreas afines.",
            "perfil_ingreso" => "BTSJC",
            "perfil_egreso" => "BTSJC",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato Tecnológico San José Chiapa (CRC)",
                "lat" => 19.21081344502439,
                "lng" => -97.77497322323309
            ],
            "galeria" => [
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-1.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-2.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-3.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-4.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-5.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-6.jpg",
                "./assets/unidades_academicas/BTSanJoseChiapa/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

    "BTAZacapoaxtla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Bachilleratos Tecnológicos",
            "nombre_corto" => "Bachillerato Tecnológico Agropecuario Zacapoaxtla (CRNO)",
            "nombre_completo" => "Bachillerato Tecnológico Agropecuario Zacapoaxtla",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_BT_COMUN,
            "tronco_comun" => [],
            "areas_propedeuticas" => [],
            "nuestra_oferta_educativa" => $OFERTA_ZACAPOAXTLA,
            "porque_estudiar" => "El Bachillerato Tecnológico Agropecuario de Zacapoaxtla se posiciona como una institución educativa de calidad que integra la formación académica con la capacitación tecnológica en las áreas agropecuaria y pecuaria, en congruencia con las condiciones sociales, productivas y culturales de la región. Su modelo educativo está orientado a promover prácticas sustentables y una formación sólida con sentido social, que impulsa el desarrollo de habilidades y la construcción de proyectos de vida. Uno de los principales distintivos de la institución es el enfoque práctico de su proceso de enseñanza-aprendizaje, el cual permite que las y los estudiantes apliquen los conocimientos adquiridos en situaciones reales. A través de actividades formativas, proyectos escolares y experiencias productivas, el estudiantado desarrolla habilidades técnicas, pensamiento crítico y competencias que les permiten enfrentar los retos del sector agropecuario, así como continuar con su formación académica o incorporarse al ámbito laboral. Asimismo, el Bachillerato se caracteriza por brindar una atención personalizada, sustentada en la cercanía y el acompañamiento constante entre docentes y estudiantes. Este enfoque refleja el compromiso institucional con el aprendizaje significativo, la equidad y la inclusión, favoreciendo el desarrollo integral y la permanencia escolar. Beneficios  •	Los estudiantes pueden acceder a becas, como: Beca Alimenticia y la Beca Benito Juárez, que representan un apoyo económico importante para su permanencia escolar. •	La institución cuenta con un programa de tutorías académicas. •	Apoyo psicológico, promoviendo el bienestar emocional y un ambiente escolar sano e inclusivo. •	Maestros comprometidos, con vocación y experiencia, además de asesorías académicas para reforzar los aprendizajes y atender dudas. ",
            "perfil_ingreso" => "BTAZ",
            "perfil_egreso" => "BTAZ",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato Tecnológico Agropecuario Zacapoaxtla",
                "lat" => 19.895301927381812,
                "lng" => -97.5850271532404
            ],
            "galeria" => [
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-1.jpeg",
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-2.jpeg",
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-3.jpeg",
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-4.jpeg",
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-5.jpeg",
                "./assets/unidades_academicas/BTAZacapoaxtla/imagen-6.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/profile.php?id=61575240562467",
                "instagram" => "https://www.instagram.com/bachillerato_buap_zacapoaxtla/",
                "web" => null
            ],
        ]
    ),

    "BTAIxtepec" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Bachilleratos Tecnológicos",
            "nombre_corto" => "Bachillerato Tecnológico Agropecuario Ixtepec (CRNO)",
            "nombre_completo" => "Bachillerato Tecnológico Agropecuario Ixtepec",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_BT_COMUN,
            "tronco_comun" => [],
            "areas_propedeuticas" => [],
            "nuestra_oferta_educativa" => $OFERTA_IXTEPEC,
            "porque_estudiar" => "El Bachillerato Tecnológico Agropecuario, perteneciente al Complejo Regional Zona Nororiental con sede Ixtepec, es un programa de educación media superior bajo un modelo de oferta bivalente que no solo permite al egresado obtener su certificado de Bachillerato para continuar sus estudios en el nivel superior, sino que además obtienen una cédula profesional como Técnico Agropecuario. Esta certificación oficial es una herramienta indispensable que facilita su inserción inmediata al campo laboral en el sector agropecuario. El Bachillerato cuenta con una planta docente joven, dinámico y con amplios conocimientos en las diferentes disciplinas que se cursan. Los alumnos reciben una formación técnica en las áreas de Producción Animal y Producción Agrícola, en el que desarrollan competencias para ser agentes de cambio y desarrollo en su comunidad y entorno. El estudiante no solo aprende el 'cómo', sino el 'porqué' de una producción responsable con el medio ambiente, combinado prácticas sustentables y sostenibles que garantizan la preservación de los recursos naturales y el equilibrio ecológico para las futuras generaciones. Más allá de la formación técnica profesional, nos distingue un profundo compromiso con la identidad. Ya que durante la formación académica se realizan actividades culturales que tienen como finalidad la redignificación activa de las lenguas originarias, esto a través de clases de lengua Tutunakú y música tradicional de la región, de esta manera fortalecemos el orgullo de pertenencia y el respeto por nuestro patrimonio cultural. Nuestras instalaciones son el escenario en donde la teoría se transforme en práctica diaria. Los estudiantes tienen acceso a espacios como parcelas y de ganado en el que aplican métodos de cuidado de cultivos y ganado, complementando su formación como técnicos agropecuarios. Con el compromiso de formar técnicos agropecuarios y que a su vez lideren proyectos productivos con impacto social y contribuir al progreso económico y social de su comunidad. ",
            "perfil_ingreso" => "BTAI",
            "perfil_egreso" => "BTAI",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato Tecnológico Agropecuario Ixtepec",
                "lat" => 20.01567586326699,
                "lng" => -97.65484571254876
            ],
            "galeria" => [
                "./assets/unidades_academicas/BTAIxtepec/imagen-1.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-2.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-3.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-4.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-5.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-6.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-7.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-8.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-9.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-10.jpeg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-11.jpeg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => "https://crzn.buap.mx/"
            ],
        ]
    ),

    "PrepaADistancia" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Preparatoria a Distancia",
            "nombre_completo" => "Preparatoria a Distancia",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_PAD,
            "tronco_comun" => [],
            "areas_propedeuticas" => [],
            "nuestra_oferta_educativa" => "",
            "porque_estudiar" => "El Plan de estudios de la Preparatoria a Distancia BUAP se propone para atender personas adultas de 20 años en adelante en una primera etapa. Considerando que es una necesidad atender a las personas adultas que ya se encuentran trabajando pero que requieren de contar con estudios de Nivel Medio Superior. Cumpliendo con el perfil por competencias ",
            "perfil_ingreso" => "PAD",
            "perfil_egreso" => "PAD",
            "ubicacion" => [],
            "galeria" => [],
            "duracion" => "2 años",
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => null
            ],
        ]
    ),

];


// Función auxiliar actualizada para incluir la imagen
function obtenerOfertaAgrupada($unidades) {
    $agrupado = [];
    foreach ($unidades as $id => $datos) {
        // MODIFICACIÓN: Ahora guardamos un arreglo con nombre e imagen, no solo el nombre.
        $agrupado[$datos['categoria']][$id] = [
            'nombre' => $datos['nombre_corto'],
        ];
    }
    // Definir el orden deseado de las categorías
    $orden = [
        "Preparatorias Urbanas (Plan De Estudios Bachillerato General)", 
        "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
        "Bachilleratos Tecnológicos",
        "Programa Bachillerato Internacional",
        "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
        "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
        "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
        "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
    ];
    // Ordenar el arreglo resultante
    $agrupadoOrdenado = [];
    foreach ($orden as $cat) {
        if (isset($agrupado[$cat])) {
            $agrupadoOrdenado[$cat] = $agrupado[$cat];
        }
    }
    return $agrupadoOrdenado;
}
?>
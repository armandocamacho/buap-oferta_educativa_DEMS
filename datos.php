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
            "porque_estudiar" => "",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria 2 De Octubre de 1968",
                "lat" => 19.025621511002914,
                "lng" => -98.23040757401687
            ],
            "galeria" => [
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-1.jpeg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-2.jpeg",
                "./assets/unidades_academicas/2deOctubrePuebla/imagen-3.jpeg"
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => null
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
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-1.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-2.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-3.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-4.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-5.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-6.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-7.jpeg",
                "./assets/unidades_academicas/LazaroCardenasPuebla/imagen-8.jpeg",
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
                "./assets/unidades_academicas/PrepaCuetzalan/imagen-9.jpeg",
            ],
            "redes" => [
                "facebook" => "https://www.facebook.com/share/1C6QXjx1Fh/",
                "instagram" => "https://www.instagram.com/prepacuetzalancrzn?igsh=b3c0N3F6enpubXB6",
                "web" => null
            ],
        ]
    ),

    "SimonBolivarIzucar" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
            "nombre_corto" => "Prep. Simón Bolívar (Izúcar de Matamoros)",
            "nombre_completo" => "Preparatoria Simón Bolívar Izúcar",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "La Preparatoria BUAP Campus Izúcar de Matamoros brinda a sus estudiantes una formación académica integral orientada al ingreso y desempeño exitoso en el nivel superior. Cuenta con una planta docente especializada y con instalaciones modernas que responden a las necesidades actuales del proceso de enseñanza-aprendizaje. El plantel dispone de laboratorios de ciencias, de tecnologías de la información y de lenguas, biblioteca física y virtual, auditorio, canchas deportivas y áreas de esparcimiento, lo que permite el desarrollo académico, cultural y deportivo del estudiantado. Desde los primeros semestres, las y los alumnos reciben orientación vocacional que les permite identificar sus intereses profesionales. En la etapa terminal, se ofrece una formación específica por áreas del conocimiento: Humanidades; Ciencias Experimentales y de la Salud; Matemáticas e Ingenierías; y Ciencias Sociales, facilitando una transición informada hacia la educación superior. Además de impulsar la excelencia académica, la preparatoria fomenta valores como el trabajo en equipo, la responsabilidad social, la inclusión, el respeto y el cuidado del medio ambiente, a través de proyectos multidisciplinarios, actividades culturales, deportivas y de integración comunitaria. La Preparatoria BUAP Izúcar de Matamoros es un referente educativo en la Mixteca Poblana y una opción sólida para quienes buscan una formación de calidad con sentido humano y crítico.",
            "perfil_ingreso" => "MUM",
            "perfil_egreso" => "MUM",
            "ubicacion" => [
                "nombre" => "BUAP Preparatoria Simón Bolívar Izúcar",
                "lat" => 18.634679373164392,
                "lng" => -98.46938149427781 
            ],
            "galeria" => [
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-1.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-2.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-3.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-4.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-5.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-6.png",
                "./assets/unidades_academicas/SimonBolivarIzucar/imagen-7.png",
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
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-7.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-1.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-2.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-3.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-4.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-5.jpg",
                "./assets/unidades_academicas/PrepaTeziutlan/imagen-6.jpg",
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

    "BTAZacapoaxtla" => array_merge(
        estructuraBaseUnidad(),
        [
            "categoria" => "Bachilleratos Tecnológicos",
            "nombre_corto" => "Bachillerato Tecnológico Agropecuario Zacapoaxtla (CRNO)",
            "nombre_completo" => "Bachillerato Tecnológico Agropecuario Zacapoaxtla",
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
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
            "plan_estudios_comun" => $PLAN_ESTUDIOS_COMUN,
            "tronco_comun" => $TRONCO_COMUN_GENERAL,
            "areas_propedeuticas" => $AREAS_PROPEDUTICAS_GENERALES,
            "porque_estudiar" => "El Bachillerato Tecnológico Agropecuario, perteneciente al Complejo Regional Zona Nororiental con sede Ixtepec, es un programa de educación media superior bajo un modelo de oferta bivalente que no solo permite al egresado obtener su certificado de Bachillerato para continuar sus estudios en el nivel superior, sino que además obtienen una cédula profesional como Técnico Agropecuario. Esta certificación oficial es una herramienta indispensable que facilita su inserción inmediata al campo laboral en el sector agropecuario. El Bachillerato cuenta con una planta docente joven, dinámico y con amplios conocimientos en las diferentes disciplinas que se cursan. Los alumnos reciben una formación técnica en las áreas de Producción Animal y Producción Agrícola, en el que desarrollan competencias para ser agentes de cambio y desarrollo en su comunidad y entorno. El estudiante no solo aprende el 'cómo', sino el 'porqué' de una producción responsable con el medio ambiente, combinado prácticas sustentables y sostenibles que garantizan la preservación de los recursos naturales y el equilibrio ecológico para las futuras generaciones. Más allá de la formación técnica profesional, nos distingue un profundo compromiso con la identidad. Ya que durante la formación académica se realizan actividades culturales que tienen como finalidad la redignificación activa de las lenguas originarias, esto a través de clases de lengua Tutunakú y música tradicional de la región, de esta manera fortalecemos el orgullo de pertenencia y el respeto por nuestro patrimonio cultural. Nuestras instalaciones son el escenario en donde la teoría se transforme en práctica diaria. Los estudiantes tienen acceso a espacios como parcelas y de ganado en el que aplican métodos de cuidado de cultivos y ganado, complementando su formación como técnicos agropecuarios. Con el compromiso de formar técnicos agropecuarios y que a su vez lideren proyectos productivos con impacto social y contribuir al progreso económico y social de su comunidad. ",
            "perfil_ingreso" => "BTAI",
            "perfil_egreso" => "BTAI",
            "ubicacion" => [
                "nombre" => "BUAP Bachillerato Tecnológico Agropecuario Ixtepec",
                "lat" => 20.01567586326699,
                "lng" => -97.65484571254876
            ],
            "galeria" => [
                "./assets/unidades_academicas/BTAIxtepec/imagen-1.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-2.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-3.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-4.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-5.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-6.jpg",
                "./assets/unidades_academicas/BTAIxtepec/imagen-7.jpg",
            ],
            "redes" => [
                "facebook" => null,
                "instagram" => null,
                "web" => "https://crzn.buap.mx/"
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
                "nombre" => "BUAP Preparatoria Venustiano Carranza",
                "lat" => 20.47610250513977,
                "lng" => -98.68550103611645
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
            "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
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
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-1.png",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-2.png",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-3.png",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-4.png",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-5.jpeg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-6.jpeg",
                "./assets/unidades_academicas/SimonBolivarAtlixco/imagen-7.jpeg",
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




    "BenitoPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Lic. Benito Juárez García",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=BJU", // IMAGEN DE RELLENO
        "nombre_completo" => "Preparatoria Lic. Benito Juárez García",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "CabreraPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Urbana Enrique Cabrera Barroso",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=UECB",
        "nombre_completo" => "Prep. Urbana Enrique Cabrera Barroso",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "5demayo" => [
        // "categoria" => "Preparatoria",
        "categoria" => "Programa Bachillerato Internacional",
        "nombre_corto" => "Bachillerato 5 de Mayo",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=B5M",
        "nombre_completo" => "Bachillerato 5 de Mayo",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],

    // --- CATEGORÍA: COMPLEJO REGIONAL CENTRO ---
    "AlfonsoCalderonAcajete" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Acajete",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=ACA",
        "nombre_completo" => "Preparatoria Acajete",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.104, "lng" => -97.953],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaAcatzingo" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Acatzingo",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=ACAT",
        "nombre_completo" => "Preparatoria Acatzingo",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.979, "lng" => -97.783],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "Amozoc" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Amozoc",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=AMO",
        "nombre_completo" => "Preparatoria Amozoc",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.039, "lng" => -98.044],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "CabreraSerdan" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Ciudad Serdán",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=CS",
        "nombre_completo" => "Preparatoria Ciudad Serdán",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.987, "lng" => -97.446],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaElSeco" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. San Salvador El Seco",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=SSES",
        "nombre_completo" => "Preparatoria San Salvador El Seco",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.135, "lng" => -97.640],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "2deOctubreTepeaca" => [
        "categoria" => "Complejo Regional Centro (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Tepeaca",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=TEP",
        "nombre_completo" => "Preparatoria Tepeaca",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.965, "lng" => -97.900],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],


    // --- CATEGORÍA: bachilleratos tecnológicos ---
    "SanJoseChiapa" => [
        // "categoria" => "Complejo Regional Centro",
        "categoria" => "Bachilleratos Tecnológicos",
        "nombre_corto" => "Bachillerato Tecnológico San José Chiapa (CRC)",
        "url_imagen" => "https://placehold.co/60x60/f87171/ffffff?text=BTSJC",
        "nombre_completo" => "BT San José Chiapa",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.244, "lng" => -97.764],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "bt-zacachimalpa" => [
        "categoria" => "Bachilleratos Tecnológicos",
        "nombre_corto" => "Bachillerato Tecnológico San Pedro Zacachimalpa",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=BTSPZ",
        "nombre_completo" => "Bachillerato Tecnológico San Pedro Zacachimalpa",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],


        // --- CATEGORÍA: COMPLEJO REGIONAL SUR ---
    "coyomeapan" => [
        "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Coyomeapan",
        "url_imagen" => "https://placehold.co/60x60/fb923c/ffffff?text=COYO",
        "nombre_completo" => "Preparatoria Coyomeapan",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.272, "lng" => -96.997],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaTehuacan" => [
        "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Tehuacán",
        "url_imagen" => "https://placehold.co/60x60/fb923c/ffffff?text=TEH",
        "nombre_completo" => "Preparatoria Tehuacán",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.463, "lng" => -97.393],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "Tlacotepec" => [
        "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Tlacotepec de Benito Juárez",
        "url_imagen" => "https://placehold.co/60x60/fb923c/ffffff?text=TLA",
        "nombre_completo" => "Prep. Tlacotepec de Benito Juárez",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.667, "lng" => -97.650],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "VicenteGuerrero" => [
        "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Vicente Guerrero",
        "url_imagen" => "https://placehold.co/60x60/fb923c/ffffff?text=TLA",
        "nombre_completo" => "Prep. Vicente Guerrero",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.667, "lng" => -97.650],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PreparatoriaADistancia" => [
        "categoria" => "Complejo Regional Sur (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Preparatoria a distancia",
        "url_imagen" => "https://placehold.co/60x60/fb923c/ffffff?text=TLA",
        "nombre_completo" => "Prep. Vicente Guerrero",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.667, "lng" => -97.650],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],


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
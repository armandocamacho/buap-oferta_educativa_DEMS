<?php
// datos.php

// Definimos un arreglo maestro con toda la información.
$unidadesAcademicas = [
    // =================================================================================
    // UNIDAD COMPLETAMENTE FUNCIONAL (EJEMPLO)
    // =================================================================================
    "2deOctubrePuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. 2 de Octubre de 1968",
        "url_imagen" => "./assets/2_de_octubre.jpeg", 
        "nombre_completo" => "Preparatoria 2 de Octubre de 1968",
        "duracion" => "6 Semestres",
        "ubicacion" => [
            "nombre" => "BUAP Preparatoria 2 De Octubre de 1968",
            "lat" => 19.0328774,
            "lng" => -98.2261384
        ],
        // Plan de estudios: Tronco Común (1ro a 4to) - Se mantiene igual según tu base
        "plan_estudios_comun" => [
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
        ],

        // Tronco Común obligatorio para 5to y 6to (Extraído de Source 3 - Áreas Disciplinares y Formación Integral)
        "tronco_comun" => [
            "5to Semestre" => [
                "Cálculo", 
                "Física I", 
                "Narrativa Literaria", 
                "Lengua Extranjera V", 
                "Innovación de Aplicaciones", 
                "Introducción a la Economía",
                "Cultura Física V",
                "Emprendimiento V",
                "Tutoría V"
            ],
            "6to Semestre" => [
                "Análisis de Eventos", 
                "Física II", 
                "Expresión Literaria", 
                "Lengua Extranjera VI", 
                "Desarrollo de Habilidades Digitales a Través de Dispositivos Autónomos", 
                "Problemas Socioeconómicos de México",
                "Cultura Física VI",
                "Emprendimiento VI",
                "Tutoría VI"
            ]
        ],

        // Áreas seriadas para 5to y 6to (Extraído de Source 14)
        "areas_propedeuticas" => [
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
        ],

        "galeria" => [
            "./assets/2_de_octubre.jpeg",
            "./assets/2_de_octubre.jpeg",
            "./assets/2_de_octubre.jpeg"
        ],
        "redes" => [
            "facebook" => "https://www.facebook.com/prepa2deoctubre?locale=es_LA",
            "instagram" => "https://www.instagram.com/prepa2deoctubrebuap/?hl=es",
            "web" => "https://prepa2deoctubrebuap.blogspot.com/?fbclid=IwY2xjawOlY_JleHRuA2FlbQIxMABicmlkETFXeXJUQUNsWWJQQjVTOXNHc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHoXFsPMysskQYE23dN5iPxDCbBEgvQr2Wj5zMuBFYKcUy4ScNT4rbm1KIklS_aem_S0YPSzs24MTlUZkOfORJ-w"
        ],
        "perfil_ingreso" => [
            "Certificado de secundaria concluida.",
            "Habilidad para el estudio independiente.",
            "Interés en las ciencias y humanidades."
        ],
    ],

    // =================================================================================
    // OTRAS UNIDADES (CON IMÁGENES DE RELLENO)
    // =================================================================================
    
    // --- CATEGORÍA: PREPARATORIA ---
    "AlfonsoCalderonPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Alfonso Calderón Moreno",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=ACM", // IMAGEN DE RELLENO
        "nombre_completo" => "Preparatoria Alfonso Calderón Moreno",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "BenitoPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Lic. Benito Juárez García",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=BJU", // IMAGEN DE RELLENO
        "nombre_completo" => "Preparatoria Lic. Benito Juárez García",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "ZapataPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Gral. Emiliano Zapata Salazar",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=EZS",
        "nombre_completo" => "Preparatoria Gral. Emiliano Zapata Salazar",
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
    "LazaroCardenasPuebla" => [
        "categoria" => "Preparatorias Urbanas (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Gral. Lázaro Cárdenas del Río",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=LCR",
        "nombre_completo" => "Prep. Gral. Lázaro Cárdenas del Río",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaSanMartin" => [
        "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
        // "nombre_corto" => "Prep. Gral. Emiliano Zapata (San Martín Texmelucan)",
        "nombre_corto" => "Preparatoria San Martín Texmelucan",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=EZSM",
        "nombre_completo" => "Prep. Gral. Emiliano Zapata San Martín",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "CabreraTecamachalco" => [
        "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
        // "nombre_corto" => "Prep. Regional Enrique Cabrera Barroso (Tecamachalco)",
        "nombre_corto" => "Preparatoria Tecamachalco",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=RECB",
        "nombre_completo" => "Prep. Regional Enrique Cabrera Barroso",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.0414, "lng" => -98.2063],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "SimonBolivarAtlixco" => [
        "categoria" => "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
        // "nombre_corto" => "Prep. Simón Bolivar (Atlixco)",
        "nombre_corto" => "Preparatoria Atlixco",
        "url_imagen" => "https://placehold.co/60x60/3b82f6/ffffff?text=SBA",
        "nombre_completo" => "Prep. Simón Bolivar Atlixco",
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

    // --- CATEGORÍA: COMPLEJO REGIONAL NORTE ---
    "PrepaChignahuapan" => [
        "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Chignahuapan",
        "url_imagen" => "https://placehold.co/60x60/4ade80/ffffff?text=CHIG",
        "nombre_completo" => "Preparatoria Chignahuapan",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.838, "lng" => -98.032],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaVenCarr" => [
        "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Venustiano Carranza",
        "url_imagen" => "https://placehold.co/60x60/4ade80/ffffff?text=VC",
        "nombre_completo" => "Preparatoria Venustiano Carranza",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 20.507, "lng" => -97.668],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "LazaroCardenasZacatlan" => [
        "categoria" => "Complejo Regional Norte (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Zacatlán",
        "url_imagen" => "https://placehold.co/60x60/4ade80/ffffff?text=ZAC",
        "nombre_completo" => "Preparatoria Zacatlán",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.931, "lng" => -97.960],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],

    // --- CATEGORÍA: COMPLEJO REGIONAL NORORIENTAL ---
    "PrepaCuetzalan" => [
        "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Cuetzalan",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=CUET",
        "nombre_completo" => "Preparatoria Cuetzalan",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 20.017, "lng" => -97.523],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaLibres" => [
        "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Libres",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=LIB",
        "nombre_completo" => "Preparatoria Libres",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.461, "lng" => -97.689],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaTeziutlan" => [
        "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Teziutlán",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=TEZ",
        "nombre_completo" => "Preparatoria Teziutlán",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.818, "lng" => -97.359],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "PrepaTlatlauquitepec" => [
        "categoria" => "Complejo Regional Nororiental (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Tlatlauquitepec",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=TLAT",
        "nombre_completo" => "Preparatoria Tlatlauquitepec",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.852, "lng" => -97.493],
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

    // --- CATEGORÍA: COMPLEJO REGIONAL MIXTECA ---
    "PrepaChiautla" => [
        "categoria" => "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Chiautla de Tapia",
        "url_imagen" => "https://placehold.co/60x60/a78bfa/ffffff?text=CHIA",
        "nombre_completo" => "Preparatoria Chiautla de Tapia",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.299, "lng" => -98.599],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "SimonBolivarIzucar" => [
        "categoria" => "Complejo Regional Mixteca (Plan De Estudios Bachillerato General)",
        "nombre_corto" => "Prep. Izúcar de Matamoros",
        "url_imagen" => "https://placehold.co/60x60/a78bfa/ffffff?text=IZU",
        "nombre_completo" => "Preparatoria Izúcar de Matamoros",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 18.600, "lng" => -98.465],
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


    // --- CATEGORÍA: bachilleratos tecnológicos ---
    "SanJoseChiapa" => [
        // "categoria" => "Complejo Regional Centro",
        "categoria" => "Bachilleratos Tecnológicos",
        "nombre_corto" => "Bachillerato Tecnológico San José Chiapa",
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
    "bt-ixtepec" => [
        // "categoria" => "Complejo Regional Nororiental",
        "categoria" => "Bachilleratos Tecnológicos",
        "nombre_corto" => "Bachillerato Tecnológico Agropecuario Ixtepec",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=BTAI",
        "nombre_completo" => "BT Agropecuario Ixtepec",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 20.034, "lng" => -97.647],
        "plan_estudios_comun" => ["Información" => ["Plan de estudios en proceso de carga."]]
    ],
    "bt-zacapoaxtla" => [
        // "categoria" => "Complejo Regional Nororiental",
        "categoria" => "Bachilleratos Tecnológicos",
        "nombre_corto" => "Bachillerato Tecnológico Agropecuario Zacapoaxtla",
        "url_imagen" => "https://placehold.co/60x60/facc15/000000?text=BTAZ",
        "nombre_completo" => "BT Agropecuario Zacapoaxtla",
        "duracion" => "Por definir",
        "ubicacion" => ["nombre" => "Ubicación pendiente", "lat" => 19.871, "lng" => -97.593],
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
            // Usamos un operador ternario para evitar errores si alguna no tuviera imagen definida
            'imagen' => isset($datos['url_imagen']) ? $datos['url_imagen'] : ''
        ];
    }
    // Definir el orden deseado de las categorías
    $orden = [
        "Bachilleratos Tecnológicos",
        "Programa Bachillerato Internacional",
        "Preparatorias Urbanas (Plan De Estudios Bachillerato General)", 
        "Preparatorias Regionales (Plan De Estudios Bachillerato General)",
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
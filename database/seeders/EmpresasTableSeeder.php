<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('empresas')->delete();
        
        \DB::table('empresas')->insert(array (
            0 => 
            array (
                'id' => '1',
                'token' => 'i502jx2q-jxm4-5h5f-ep0q-keppxec0pxj',
                'nombre' => 'Träfika Creative Studio S.A. de C.V.',
                'logo' => 'logos/oASsriZnLQ1gL9w3v8UEE5GMzPPCEiP3DyAhEaDv.png',
                'imagen_fondo' => 'imagenes_fondo/xnYcJbPM83RNi1Bdv2uE08CJHEvDNuCZYhkKZsJE.png',
                'colores_principales' => '#000000',
                'descripcion' => 'Encuesta para la empresa Träfika Creative Studio S.A. de C.V.',
                'activo' => '0',
            'aviso' => '<h1><strong>Aviso de Privacidad</strong></h1><div><br></div><div><strong>Aviso de Privacidad Integral que formará parte del expediente personal como requerimiento de la norma NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo - Identificación, análisis y prevención, a cargo de la empresa Träfika<br></strong><br></div><div><strong>Träfika </strong>con domicilio Blvd. Pedro Infante, No. 2911, interior 208, C.P. 80020, Desarrollo Urbano 3 Ríos es el responsable del tratamiento de los datos personales que nos proporcionen, los cuales serán protegidos conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de Particulares (LFPDPPP) y la normatividad que resulte aplicable.<br><br></div><div>¿Qué datos personales solicitamos y para qué fines?<br><br></div><div>Los datos personales e información recabados a las personas físicas con relación laboral con el Träfika son utilizados con la finalidad de integrar el expediente individual requerido por la NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención, cuyo objetivo es establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así como promover un entorno organizacional favorable en los centros de trabajo, para lo cual se tratarán los siguientes datos personales:<br><br></div><div>a)&nbsp; &nbsp; &nbsp;Datos de identificación personales: Correo electrónico, estado civil; sexo, edad, únicamente para la identificación en la Guía de Referencia I.<br><br></div><div>b)&nbsp; &nbsp; Datos de identificación personales sensibles: Cuestionario para identificar a los trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos, diagnóstico médico y psicológico, evidencias de sesiones llevadas a cabo y evidencia de alta médica y psicológica.<br><br></div><div>c)&nbsp; &nbsp; &nbsp;Datos Laborales: Se solicitarán únicamente en la Guía de referencia III, puesto, cargo o nombramiento asignado y nivel del puesto en la estructura orgánica.<br><br></div><div>d)&nbsp; &nbsp; Datos Académicos: Nivel de Estudios.<br><br></div><div>Los datos personales recabados, incluyendo los datos sensibles, tendrán como finalidad el incorporarlos en el registro electrónico que se presentará a la autoridad que verifique la aplicación y cumplimiento de la NOM-035-STPS-2018 en el Träfika, así como el expediente documental individual que en caso de ser necesario se integre ante casos de atención a temas de salud de trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos (información que se obtendrá de la aplicación de la Guía I de la norma), el cual será asegurado por la empresa Träfika<strong> </strong>. Fundamento para el tratamiento de datos personales. El tratamiento de sus datos personales se realiza de conformidad con lo dispuesto los artículos 10, 13, 14, 16, 17 y 22 de la Ley Federal de Protección de Datos Personales en Posesión de Particulares.&nbsp;<br><br></div><div>Transferencia de Datos Personales Los datos personales podrán ser transferidos de conformidad con lo establecido por los lineamientos de Träfika, a las siguientes instancias: Terceros Finalidad Verificador avalado por la STPS instancia que emite la NOM035-STPS-2018 Verificación de la aplicación y cumplimiento de la NOM-035-STPS-2018 Para estas transferencias requerimos de su consentimiento, por lo que, si no desea que sus datos personales sean transferidos para alguna o todas las finalidades señaladas, podrá manifestarlo al momento en que se le ponga a disposición los formatos respectivos para cada una de estas finalidades, de la institución que corresponda.&nbsp;<br><br></div><div>¿Dónde puedo ejercer mi derecho de acceso, rectificación, cancelación u oposición (ARCO) de sus datos personales? Usted podrá presentar la solicitud para el ejercicio de los derechos de ARCO a través de la Plataforma Nacional de Transparencia (PNT), <a href="http://www.plataformadetransparencia.org.mx/">http://www.plataformadetransparencia.org.mx/<br></a><br></div><div>Cambios al Aviso de Privacidad<strong> </strong>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales o por otras causas.<br><br></div><div>&nbsp;Fecha de actualización Junio 2022<br><br></div>',
                'area' => '["Direcci\\u00f3n","Arte y Dise\\u00f1o","Desarrollo Web","Administraci\\u00f3n"]',
                'tipo_contratacion' => '["Indefinida","Temporal"]',
                'jornada_trabajo' => '["9:00 a 7:00"]',
                'rotacion_turnos' => '["Rotación de prueba"]',
                'created_at' => '2022-07-05 20:29:54',
                'updated_at' => '2022-07-20 11:49:32',
            ),
            1 => 
            array (
                'id' => '3',
                'token' => 'ff5k75hm-nvyp-o3j1-bk0d-tp5ppsaz2zo',
                'nombre' => 'JVal Asesores',
                'logo' => 'logos/tFdngiHVIZxxxhe7cwsX2e4giMXhtHcMNShEbLJN.jpg',
                'imagen_fondo' => 'imagenes_fondo/FOYAQxEyzZrJ3r4jBMA5ULihic29dMStt9Gj0woe.jpg',
                'colores_principales' => '#0433ff',
                'descripcion' => 'Asesoria',
                'activo' => '1',
            'aviso' => '<div><strong>Aviso de Privacidad</strong></div><div>&nbsp;</div><div><strong>Aviso de Privacidad Integral que formará parte del expediente personal como requerimiento de la norma NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo - Identificación, análisis y prevención, a cargo de la empresa JVal Asesores<br><br></strong><br></div><div><strong>JVal Asesores </strong>con domicilio Blvd. Pedro Infante, No. 2911, interior 208, C.P. 80020, Desarrollo Urbano 3 Ríos es el responsable del tratamiento de los datos personales que nos proporcionen, los cuales serán protegidos conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de Particulares (LFPDPPP) y la normatividad que resulte aplicable.<br><br><br></div><div>¿Qué datos personales solicitamos y para qué fines?<br><br><br></div><div>Los datos personales e información recabados a las personas físicas con relación laboral con el JVal Asesores son utilizados con la finalidad de integrar el expediente individual requerido por la NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención, cuyo objetivo es establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así como promover un entorno organizacional favorable en los centros de trabajo, para lo cual se tratarán los siguientes datos personales:<br><br><br></div><div>a)&nbsp; &nbsp; &nbsp;Datos de identificación personales: Correo electrónico, estado civil; sexo, edad, únicamente para la identificación en la Guía de Referencia I.<br><br><br></div><div>b)&nbsp; &nbsp; Datos de identificación personales sensibles: Cuestionario para identificar a los trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos, diagnóstico médico y psicológico, evidencias de sesiones llevadas a cabo y evidencia de alta médica y psicológica.<br><br><br></div><div>c)&nbsp; &nbsp; &nbsp;Datos Laborales: Se solicitarán únicamente en la Guía de referencia III, puesto, cargo o nombramiento asignado y nivel del puesto en la estructura orgánica.<br><br><br></div><div>d)&nbsp; &nbsp; Datos Académicos: Nivel de Estudios.<br><br><br></div><div>Los datos personales recabados, incluyendo los datos sensibles, tendrán como finalidad el incorporarlos en el registro electrónico que se presentará a la autoridad que verifique la aplicación y cumplimiento de la NOM-035-STPS-2018 en el JVal Asesores, así como el expediente documental individual que en caso de ser necesario se integre ante casos de atención a temas de salud de trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos (información que se obtendrá de la aplicación de la Guía I de la norma), el cual será asegurado por la empresa JVal Asesores<strong> </strong>. Fundamento para el tratamiento de datos personales. El tratamiento de sus datos personales se realiza de conformidad con lo dispuesto los artículos 10, 13, 14, 16, 17 y 22 de la Ley Federal de Protección de Datos Personales en Posesión de Particulares.&nbsp;<br><br><br></div><div>Transferencia de Datos Personales Los datos personales podrán ser transferidos de conformidad con lo establecido por los lineamientos de JVal Asesores, a las siguientes instancias: Terceros Finalidad Verificador avalado por la STPS instancia que emite la NOM035-STPS-2018 Verificación de la aplicación y cumplimiento de la NOM-035-STPS-2018 Para estas transferencias requerimos de su consentimiento, por lo que, si no desea que sus datos personales sean transferidos para alguna o todas las finalidades señaladas, podrá manifestarlo al momento en que se le ponga a disposición los formatos respectivos para cada una de estas finalidades, de la institución que corresponda.&nbsp;<br><br><br></div><div>¿Dónde puedo ejercer mi derecho de acceso, rectificación, cancelación u oposición (ARCO) de sus datos personales? Usted podrá presentar la solicitud para el ejercicio de los derechos de ARCO a través de la Plataforma Nacional de Transparencia (PNT), <a href="http://www.plataformadetransparencia.org.mx/">http://www.plataformadetransparencia.org.mx/<br></a><br></div><div>Cambios al Aviso de Privacidad<strong> </strong>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales o por otras causas.<br><br><br></div><div>&nbsp;Fecha de actualización Junio 2022</div><div>&nbsp;</div>',
                'area' => '["Direcci\\u00f3n","Jur\\u00eddico","Asesor\\u00eda"]',
                'tipo_contratacion' => '["Confianza","Socio"]',
                'jornada_trabajo' => '["Lunes a Jueves 8:00 a 16:00 Viernes desde casa","Otro"]',
                'rotacion_turnos' => '["Rotación de prueba"]',
                'created_at' => '2022-07-20 11:41:31',
                'updated_at' => '2022-07-20 11:41:31',
            ),
            2 => 
            array (
                'id' => '4',
                'token' => 'f3we8ohe-h677-alf7-f8ij-es1pgtnm8kj',
                'nombre' => 'Municipio de Culiacán',
                'logo' => 'logos/8hSM0IZXGiy5ofeTDIk96ypsX8EHjy59zMr0Qga1.jpg',
                'imagen_fondo' => 'imagenes_fondo/timNG1n5s1LgPkEp5roiQzJW38buZYo3TFS85lEv.jpg',
                'colores_principales' => '#0061ff',
                'descripcion' => 'Servicios Municipales',
                'activo' => '1',
            'aviso' => '<div><strong>Aviso de Privacidad Integral que formará parte del expediente personal como requerimiento de la norma NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo - Identificación, análisis y prevención, a cargo de la empresa JVal Asesores S.C.</strong></div><div>&nbsp;</div><div><strong>JVal Asesores S.C. </strong>con domicilio Blvd. Pedro Infante, No. 2911, interior 208, C.P. 80020, Desarrollo Urbano 3 Ríos es el responsable del tratamiento de los datos personales que nos proporcionen, los cuales serán protegidos conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de Particulares (LFPDPPP) y la normatividad que resulte aplicable.</div><div>&nbsp;</div><div>¿Qué datos personales solicitamos y para qué fines?</div><div>&nbsp;</div><div>Los datos personales e información recabados a las personas físicas con relación laboral con el Municipio de Culiacán son utilizados con la finalidad de integrar el expediente individual requerido por la NOM-035-STPS-2018. Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención, cuyo objetivo es establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así como promover un entorno organizacional favorable en los centros de trabajo, para lo cual se tratarán los siguientes datos personales:</div><div>&nbsp;</div><div>a)&nbsp; &nbsp; &nbsp;Datos de identificación personales: Correo electrónico, estado civil; sexo, edad, únicamente para la identificación en la Guía de Referencia I.</div><div><strong>&nbsp;</strong></div><div>b)&nbsp; &nbsp; Datos de identificación personales sensibles: Cuestionario para identificar a los trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos, diagnóstico médico y psicológico, evidencias de sesiones llevadas a cabo y evidencia de alta médica y psicológica.</div><div><strong>&nbsp;</strong></div><div>c)&nbsp; &nbsp; &nbsp;Datos Laborales: Se solicitarán únicamente en la Guía de referencia III, puesto, cargo o nombramiento asignado y nivel del puesto en la estructura orgánica.</div><div>&nbsp;</div><div>d)&nbsp; &nbsp; Datos Académicos: Nivel de Estudios.</div><div>&nbsp;</div><div>Los datos personales recabados, incluyendo los datos sensibles, tendrán como finalidad el incorporarlos en el registro electrónico que se presentará a la autoridad que verifique la aplicación y cumplimiento de la NOM-035-STPS-2018 en el Municipio de Culiacán, así como el expediente documental individual que en caso de ser necesario se integre ante casos de atención a temas de salud de trabajadores(as) que fueron sujetos a acontecimientos traumáticos severos (información que se obtendrá de la aplicación de la Guía I de la norma), el cual será asegurado por la empresa JVal Asesores S.C.<strong> </strong>. Fundamento para el tratamiento de datos personales. El tratamiento de sus datos personales se realiza de conformidad con lo dispuesto los artículos 10, 13, 14, 16, 17 y 22 de la Ley Federal de Protección de Datos Personales en Posesión de Particulares.</div><div>&nbsp;</div><div>Transferencia de Datos Personales Los datos personales podrán ser transferidos de conformidad con lo establecido por los lineamientos del Municipio de Culiacán, a las siguientes instancias: Terceros Finalidad Verificador avalado por la STPS instancia que emite la NOM035-STPS-2018 Verificación de la aplicación y cumplimiento de la NOM-035-STPS-2018 Para estas transferencias requerimos de su consentimiento, por lo que, si no desea que sus datos personales sean transferidos para alguna o todas las finalidades señaladas, podrá manifestarlo al momento en que se le ponga a disposición los formatos respectivos para cada una de estas finalidades, de la institución que corresponda.&nbsp;</div><div>&nbsp;</div><div>¿Dónde puedo ejercer mi derecho de acceso, rectificación, cancelación u oposición (ARCO) de sus datos personales? Usted podrá presentar la solicitud para el ejercicio de los derechos de ARCO directamente ante el Municipio de Culiacán, en Avenida Gral. Álvaro Obregón S/N entre Benito Juárez y Mariano Escobedo, Centro, C.P. 80000 Culiacán, Sinaloa, o bien, a través de la Plataforma Nacional de Transparencia (PNT), <a href="http://www.plataformadetransparencia.org.mx/">http://www.plataformadetransparencia.org.mx/</a></div><div>&nbsp;</div><div>Cambios al Aviso de Privacidad<strong> </strong>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales o por otras causas.</div><div>&nbsp;</div><div>&nbsp;Fecha de actualización Junio 2022</div><div>&nbsp;</div>',
            'tipo_puesto' => '["Abogado(a)","Administrado General","Agente de Mantenimiento","Alba\\u00f1il","Almacenista","Arbitro Presidente","Asesor A","Auxiliar A","Auxiliar B","Auxiliar C","Auxiliar Administrativo A","Auxiliar Administrativo B","Auxiliar T\\u00e9cnico","Ayudante de Mec\\u00e1nico A","Ayudante Mec\\u00e1nico","Bibliotecario","Capturista Pc","Carrocero","Chofer B","Chofer cami\\u00f3n","Chofer electricista","Comisario","Conserje","Controlador General","Coordinador Administrativo","Coordinador","Coordinador A","Coordinador C","Coordinador Ejecutivo","Coordinador Ejecutivo D","Coordinador General","Cronista Oficial","Director A","Ejecutor","Electricista","Encargado(a) del despacho","Enfermera","Experto","Fotografo Oficial","Gerente General","Inspector","Jardinero","Jefe de Departamento A","Jefe de Departamento B","Jefe de Departamento C","Jefe de Departamento D","Jefe de Secci\\u00f3n A","Jefe de Secci\\u00f3n B","Jefe de Unidad","Juez Calificador","Juez Coordinador","Lavador de Unidades","Mec\\u00e1nico","Mecan\\u00f3grafa","Mediador Social","M\\u00e9dico","M\\u00e9dico Veterinario","Monitor","Odont\\u00f3logo","Oficial","Oficial el\\u00e9ctrico","Operador de Barredora","Operador de Maquinaria Pesada","Operador de Radio","Pe\\u00f3n","Perito","Polic\\u00eda","Polic\\u00eda Primero","Polic\\u00eda Segundo","Polic\\u00eda Tercero","Polic\\u00eda Ua","Polic\\u00eda Ur","Primer Oficial","Programador Analista","Programador de Computadoras","Promotor","Promotor Deportivo","Promotor Vial","Psic\\u00f3logo","Secretaria Ejecutiva","Secretario","Secretario del Ayuntamiento","Secretario de S\\u00edndico","Secretario Particular","S\\u00edndico","Srio del Trib de Barandillas","Subdirector B","Subinspector","Subjefe de Departamento","Suboficial","Subsecretario","Supervisor","Supervisor Upc","Tesorero Municipal","Topografo","Trabajadora Social ","Velador","Ayudante de Maquinaria","Cadenero ","Cajero","Cobrador","Encargado(a) de Mantenimiento","Gratificador","Jefe de Departamento","Jefe de de Grupo","Jefe de Secci\\u00f3n","Jubilado Recategorizado","Oficial de Transito","Oficial Segundo","Operador","Operador de Computadora","Operador de videovigilancia","Plomero","Policia Jubilado 1 ","Presidente Municipal","Radiot\\u00e9cnico","Regidor","S\\u00edndico Procurador","Soldador","Subdirector Operativo","Supervisor General","Supervisor Operativo","Taquimecanografa","Vitalizador"]',
            'area' => '["ADMINISTRACION DE CENTROS DE BARRIO","ADMINISTRACION DEL CENTRO CIVICO CONSTITUCION","ADMINISTRACION DEL PARQUE LAS RIBERAS","ADMINISTRACION DEL POLIDEPORTIVO JUAN S. MILLAN L","ADMINISTRACION POLIDEPORTIVO VALLE ALTO","ASEO Y LIMPIA  BARRENDEROS","ASEO Y LIMPIA  RECOLECCION","BIBLIOTECAS MUNICIPALES AGUARUTO","BIBLIOTECAS MUNICIPALES CULIACAN","CENTRAL PERSONAL OCTAVA COMPA\\u00d1IA","CENTRAL PERSONAL OCTAVA COMPA\\u00d1IA INCAP PERMANENTES","CENTRAL PERSONAL SEXTA COMPA\\u00d1IA","CENTRO DE BARIO DE COSTA RICA","CENTRO DE BARRIO 21 DE MARZO","CENTRO DE BARRIO AGUARUTO","CENTRO DE BARRIO CULIACANCITO","CENTRO DE BARRIO DE ELDORADO","CENTRO DE BARRIO DE LA LOMBADO TOLEDANO","CENTRO DE BARRIO DE QUILA","CENTRO DE BARRIO EL TAMARINDO","COLECTURIAS ELDORADO","COMISION MUNICIPAL DE DESARROLLO","CONSEJO MPAL PARA PREV Y ATENDER LA VIOL FAMILIAR","CONSEJO MUNICIPAL DE SEGURIDAD PUBLICA","COORD DE ASEOSRIA Y ATENCION EN MAT EN DER HUMANOS","COORD DE JUECES CALIFICADORES DE INFRACCIONES","COORDINACION DE INSPECCION Y VIGILANCIA","COORDINACION DEL TRIBUNAL DE BARANDILLA","COORDINACION MUNICIPAL DE PROTECCION CIVIL","CORREDOR TURISTICO IMALASANALONA","CRONICA DE CULIACAN","DEPARTAMENTO ADMINITRATIVO PARQUE LAS RIBERAS","DEPARTAMENTO DE ANALISIS Y ESTADISTICA","DEPARTAMENTO DE ASESORIA Y CONVENIOS","DEPARTAMENTO DE AUDITORIA SOCIAL","DEPARTAMENTO DE AUDITORIA Y CONTROL","DEPARTAMENTO DE BIENES MUNICIPALES","DEPARTAMENTO DE COMITE SOCIAL","DEPARTAMENTO DE COMUNICACION SOCIAL","DEPARTAMENTO DE CONTROL DE OBRAS","DEPARTAMENTO DE DENUNCIAS E INVESTIGACIONES","DEPARTAMENTO DE ESTRATEGIAS DIGITALES","DEPARTAMENTO DE EVALUACION TECNICA","DEPARTAMENTO DE EVALUACION Y ESTADISTICA","DEPARTAMENTO DE EVOLUCION PATRIMONIAL","DEPARTAMENTO DE FRACIONAMIENTOS","DEPARTAMENTO DE LICENCIAS DE CONSTRUCCION","DEPARTAMENTO DE LOGISTICA DE EVENTOS","DEPARTAMENTO DE ORDENAMIENTO ECOLOGICO","DEPARTAMENTO DE PERMISOS Y LICENCIAS","DEPARTAMENTO DE PREVENCION","DEPARTAMENTO DE PROFESIONALIZACION","DEPARTAMENTO DE SERVICIOS INTERNOS","DEPARTAMENTO DE SISTEMAS","DEPARTAMENTO DE SOPORTE TECNICO Y ASESORIA","DEPARTAMENTO DE SUPERVISION DE OBRA PUBLICA","DEPARTAMENTO DE TESORERIA","DEPARTAMENTO DE USO DE SUELO","DEPARTAMENTO ESP EN PREVENCION  ROBO DE VEHICULO","DEPARTAMENTO JURIDICO","DEPARTAMENTO OPERATIVO PARQUE LAS RIBERAS","DEPTO DE ADMINISTRACION DE LA INFORMACION","DEPTO DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS","DEPTO DE AMPAROS Y JUSTICIA ADMINISTRATIVA","DEPTO DE ASEO Y LIMPIABARRIDO MECANICO","DEPTO DE ASEO Y LIMPIAMERCADOS","DEPTO DE ASESORIA JURIDICA A SERVIDORES PUBLICOS","DEPTO DE ATENCION A COMUNIDADES RURALES","DEPTO DE ATENCION A COMUNIDADES RURALES","DEPTO DE ATENCION CIUDADANA","DEPTO DE ATENCION DE ASUNTOS PENALES Y LABORALES","DEPTO DE ATENCION OBRA PUB EN COLONIAS","DEPTO DE ATN DE ASUNTOS AGRARIOS CIVILES Y CONVENI","DEPTO DE CAPACITACION DE PERSONAL","DEPTO DE COMUNICACION INTERNA","DEPTO DE EDUCACION VIAL","DEPTO DE EFICIENCIA ENERGETICA Y OPT DE RECURSOS","DEPTO DE EVENTOS Y PROMOCION CIVICA","DEPTO DE FISCALIZACION Y EJECUCION","DEPTO DE GESTION ANALISIS Y ESTRATEGIA","DEPTO DE INSPECCION DE CONSTRUCCIONES Y MEDIO AMB","DEPTO DE MEDIOS DE INFORMACION","DEPTO DE MERCADOS Y COMERCIO EN LA VIA PUBLICA","DEPTO DE NOMINA REGISTRO Y CONTROL DE PERSONAL","DEPTO DE PANTEONES","DEPTO DE PARTICIPACION COMUNITARIA","DEPTO DE PLANECION Y CONTROL PRESUPUESTAL","DEPTO DE PROMOCION E IMPULSO AL TURISMO","DEPTO DE PROTECCION AL AMBIENTE","DEPTO DE RECAUDACION DE IMPUESTO PREDIAL","DEPTO DE RECAUDACION DE IMPUESTO PREDIAL","DEPTO DE RESOLUCIONES Y SEGUIMIENTO","DEPTO DE RIEGO Y VIVEROS","DEPTO DE RIEGO Y VIVEROS SECTOR I","DEPTO DE RIEGO Y VIVEROS SECTOR II","DEPTO DE RIEGO Y VIVEROS SECTOR III","DEPTO DE RIEGO Y VIVEROS SECTOR IV","DEPTO DE SEGUIMIENTO Y EJEC DE ACUERDOS","DEPTO DE SEGUIMIENTO Y EJEC DE ACUERDOS","DEPTO DE TRAMITES DE REGULIZACION DE BIENES MPALES","DEPTO DE TRAMITES DE REGULIZACION DE BIENES MPALES","DEPTO DE VALIDACION DOCUMENTAL Y CONTROL DE PAGOS","DEPTO DEL CENTRO HISTORICO","DEPTO ESPECIALIZADO EN PREVEN DE ROBO DE VEHICULO","DEPTO JURIDICO SRIA DE DESARROLLO URB Y SUSTEN","DEPTO. DE CONSERVACION Y MANTENIMIENTO DE INFRAEST","DEPTO. DE OPERACION Y CONTROL VIAL","DEPTO. DE PROYECTOS Y ESTRATEGIAS DE TRANSPORTE","DIF (CURSOS Y TALLERES)","DIF (QUILA)","DIF PAMARBEBES VIRTUALES","DIF SISTEMA MUNICIPAL","DIF SISTEMA MUNICIPAL ELDORADO","DIF UNIDAD CNOP","DIFCENTRO COMUNITARIO EL VALLADO","DIFCOORD CAPACITACION COSTA RICA","DIR CENTRO DE EMERGENCIAS Y RESPUESTA INMEDIAT 066","DIR CENTRO DE EMERGENCIAS Y RESPUESTA INMEDIAT 066","DIR DE APOYO ADMINISTRATIVO Y LOGISTICO SSPYTM","DIR DE ASEO Y LIMPIA RECOLECCION TRATAMIENTO Y DIS","DIR DE ATENCION A GRUPOS EN SITUACION DE VULNERABI","DIR DE INNOVACION TECNOLOGICA Y ESTRATEGIAS DIGITA","DIR DE MEJORA REGULATORIA Y GESTION EMPRESARIAL","DIR DE RESPONSABILIDADES ADMINISTRATIVAS","DIR DE SERVICIOS GENERALES BIENES Y SUMINISTROS","DIR DEL CENTRO DE  EMERGENCIAS Y RESPUES INMED 066","DIRECCION DE ASESORIA DE LA PRESIDENCIA","DIRECCION DE ASESORIA DE LA PRESIDENCIA","DIRECCION DE ASUNTOS JURIDICOS","DIRECCION DE CATASTRO MUNICIPAL ","DIRECCION DE CENTROS DEPORTIVOS Y RECREATIVOS","DIRECCION DE COMERCIO SERVICIOS E INDUSTRIA","DIRECCION DE COMUNICACION SOCIAL","DIRECCION DE CONTABILIDAD","DIRECCION DE CONTRALORIA SOCIAL","DIRECCION DE DEFENSA JURIDICA","DIRECCION DE DESARROLLO REGIONAL","DIRECCION DE EDUCACION MUNICIPAL","DIRECCION DE EGRESOS Y PRESUPUESTO","DIRECCION DE ENLACE CON SINDICATURAS","DIRECCION DE INGRESOS","DIRECCION DE INVERSIONES Y GESTION DE FONDOS","DIRECCION DE LA FUNCION PUBLICA","DIRECCION DE MOVILIDAD","DIRECCION DE NORMATIVIDAD Y ASESORIA","DIRECCION DE OBRAS PUBLICAS","DIRECCION DE PARQUES JARDINES","DIRECCION DE PARTICIPACION","DIRECCION DE PESCA Y ACUACULTURA","DIRECCION DE POLICIA MUNICIPAL","DIRECCION DE RECURSOS HUMANOS","DIRECCION DE REGULACION URBANA","DIRECCION DE SALUD MUNICIPAL","DIRECCION DE SISTEMAS DE DRENAJE PLUVIAL","DIRECCION DE TRANSPARENCIA","DIRECCION DE VIALIDAD Y TRANSITO","DIRECCION DEL EMPLEO ","DIRECCION DEL MEDIO AMBIENTE","DIRECCION GENERAL DE ADMINISTRACION","DIRECCION GENERAL DE SERVICIOS PUBLICOS","DIRECCION GENERAL DE TURISMO","ESTACION DE POLICIA AGUARUTO","ESTACION DE POLICIA BAILA","ESTACION DE POLICIA COSTA RICA","ESTACION DE POLICIA CULIACANCITO","ESTACION DE POLICIA EL SALADO","ESTACION DE POLICIA ELDORADO","ESTACION DE POLICIA EMILIANO ZAPATA","ESTACION DE POLICIA HIGUERAS DE ABUYA","ESTACION DE POLICIA IMALA","ESTACION DE POLICIA JESUS MARIA","ESTACION DE POLICIA LAS TAPIAS","ESTACION DE POLICIA QUILA","ESTACION DE POLICIA SAN LORENZO","ESTACION DE POLICIA SANALONA","ESTACION DE POLICIA TACUICHAMONA","ESTACION DE POLICIA TEPUCHE","ESTACION DE POLICIA VILLA A LOPEZ MATEOS","IMPLAN","INSTITUTO MIA","INSTITUTO MUNICIPAL DE CULTURA","INSTITUTO MUNICIPAL DE LA JUVENTUD","INSTITUTO MUNICIPAL DE LAS MUJERES","INSTITUTO MUNICIPAL DE VIVIENDA","INSTITUTO MUNICIPAL DEL DEPORTE","JUBILADOS VIALIDAD Y TRANSITO COSTA RICA","JUBILADOS VIALIDAD Y TRANSITO CULIACAN","JUBILADOS Y PENSIONADOS CONFIANZA CULIACAN","JUBILADOS Y PENSIONADOS DSPM COSTA RICA","JUBILADOS Y PENSIONADOS DSPM CULIACAN","JUBILADOS Y PENSIONADOS DSPM ELDORADO","JUBILADOS Y PENSIONADOS SINDICALIZADOS COSTA RICA","JUBILADOS Y PENSIONADOS SINDICALIZADOS CULIACAN","JUBILADOS Y PENSIONADOS SINDICALIZADOS ELDORADO","JUBILADOS Y PENSIONADOS SINDICALIZADOS QUILA","JUNTA MUNICIPAL DE RECLUTAMIENTO","ORGANO INTERNO DE CONTROL","PARQUE ERNESTO MILLAN ESCALANTE","PARQUES Y JARDINES  JARDINES","PARQUES Y JARDINES  RIEGO","PARQUES Y JARDINES  SERVICIOS DIVERSOS","PARQUES Y JARDINES SECTOR I","PARQUES Y JARDINES SECTOR II","PARQUES Y JARDINES SECTOR III","PARQUES Y JARDINES SECTOR IV","PARQUES Y JARDINES VIVERO BACHIGUALATO","PARQUES Y JARDINES VIVERO PARQUE EME","POLICIA MUNICIPAL SECTOR I","POLICIA MUNICIPAL SECTOR II","POLICIA MUNICIPAL SECTOR III","POLICIA MUNICIPAL SECTOR IV","POLICIA MUNICIPAL SECTOR V","PRESIDENCIA MUNICIPAL ","REGIDORES","REGIDORES FRACCION DEL PAN","REGIDORES FRACCION DEL PAS","REGIDORES FRACCION DEL PRI","REGIDORES FRACCION MORENA","REGIDORES FRACCION MOVIMIENTO CIUDADANO","SECRETARIA DE BIENESTAR","SECRETARIA DE DESARROLLO ECONOMICO MPAL","SECRETARIA DE DESARROLLO URBANO SUSTENTABLE","SECRETARIA DE LA PRESIDENCIA","SECRETARIA DE OBRAS Y SERVICIOS PUBLICOS","SECRETARIA DE SEGURIDAD PUBLICA Y TRANSITO","SECRETARIA DEL AYUNTAMIENTO","SINDICATURA DE AGUARUTO","SINDICATURA DE BAILA","SINDICATURA DE COSTA RICA","SINDICATURA DE CULIACANCITO","SINDICATURA DE EL SALADO","SINDICATURA DE ELDORADO","SINDICATURA DE EMILIANO ZAPATA","SINDICATURA DE HIGUERAS DE ABUYA","SINDICATURA DE IMALA","SINDICATURA DE JESUS MARIA","SINDICATURA DE LAS TAPIAS","SINDICATURA DE QUILA","SINDICATURA DE SAN LORENZO","SINDICATURA DE SANALONA","SINDICATURA DE TACUICHAMONA","SINDICATURA DE TEPUCHE ","SINDICATURA DE VILLA A LOPEZ MATEOS","SINDICO PROCURADOR","SISTEMA DE PROTECCION INT DE LOS DER NI\\u00d1AS Y NI\\u00d1OS","SISTEMA DIF MUNICIPAL VESAVE","SRIA DE SEGURIDAD PUBLICA Y TRANSITO (FONDO IV) ","STASAC","SUBDIRECCION OPERATIVA POLICIA","SUBDIRECCION OPERATIVA TRANSITO","TESORERIA MUNICIPAL","TRANSITO MUNICIPAL  COSTA RICA","TRANSITO MUNICIPAL  ELDORADO","TRANSITO MUNICIPAL  QUILA","TRANSITODELEGACION CULIACANCITO","TRANSITODELEGACION NORTE","TRANSITOINCAPACITADOS PERMANENTES","TRIBUNAL MUNICIPAL DE CONCILIACION Y ARBITRAJE","ZOOLOGICO CULIACAN"]',
                'jornada_trabajo' => '["Matutino","Vespertino","Nocturno","Jornada Acumulada","12 x 24", "Otro"]',
                'rotacion_turnos' => '["Si","No"]',
                'created_at' => '2022-07-20 12:09:53',
                'updated_at' => '2022-08-10 16:00:12',
            ),
        ));
        
        
    }
}
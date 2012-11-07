--
-- PostgreSQL database dump
--

-- Started on 2011-10-16 07:57:02 VET

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 1502 (class 1259 OID 21411)
-- Dependencies: 3
-- Name: estado; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE estado (
    id_estado integer NOT NULL,
    descripcion character varying(50) NOT NULL
);


ALTER TABLE public.estado OWNER TO postgres;

--
-- TOC entry 1501 (class 1259 OID 21409)
-- Dependencies: 3 1502
-- Name: estado_id_estado_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estado_id_estado_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.estado_id_estado_seq OWNER TO postgres;

--
-- TOC entry 1799 (class 0 OID 0)
-- Dependencies: 1501
-- Name: estado_id_estado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estado_id_estado_seq OWNED BY estado.id_estado;


--
-- TOC entry 1800 (class 0 OID 0)
-- Dependencies: 1501
-- Name: estado_id_estado_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estado_id_estado_seq', 1, false);


--
-- TOC entry 1500 (class 1259 OID 21398)
-- Dependencies: 3
-- Name: ocupacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ocupacion (
    id_ocupacion integer NOT NULL,
    descripcion character varying(100) NOT NULL
);


ALTER TABLE public.ocupacion OWNER TO postgres;

--
-- TOC entry 1499 (class 1259 OID 21396)
-- Dependencies: 1500 3
-- Name: ocupacion_id_ocupacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ocupacion_id_ocupacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.ocupacion_id_ocupacion_seq OWNER TO postgres;

--
-- TOC entry 1801 (class 0 OID 0)
-- Dependencies: 1499
-- Name: ocupacion_id_ocupacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ocupacion_id_ocupacion_seq OWNED BY ocupacion.id_ocupacion;


--
-- TOC entry 1802 (class 0 OID 0)
-- Dependencies: 1499
-- Name: ocupacion_id_ocupacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ocupacion_id_ocupacion_seq', 1, true);


--
-- TOC entry 1498 (class 1259 OID 21390)
-- Dependencies: 3
-- Name: persona; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE persona (
    id_persona integer NOT NULL,
    nombre character varying(100) NOT NULL,
    apellido character varying(100) NOT NULL,
    cedula character varying(10) NOT NULL,
    sexo character(1) NOT NULL,
    fecha_nacimiento date NOT NULL,
    foto character varying(200),
    id_ocupacion integer NOT NULL,
    id_estado integer NOT NULL
);


ALTER TABLE public.persona OWNER TO postgres;

--
-- TOC entry 1497 (class 1259 OID 21388)
-- Dependencies: 3 1498
-- Name: personas_id_persona_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE personas_id_persona_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.personas_id_persona_seq OWNER TO postgres;

--
-- TOC entry 1803 (class 0 OID 0)
-- Dependencies: 1497
-- Name: personas_id_persona_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE personas_id_persona_seq OWNED BY persona.id_persona;


--
-- TOC entry 1804 (class 0 OID 0)
-- Dependencies: 1497
-- Name: personas_id_persona_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('personas_id_persona_seq', 4, true);


--
-- TOC entry 1782 (class 2604 OID 21414)
-- Dependencies: 1502 1501 1502
-- Name: id_estado; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE estado ALTER COLUMN id_estado SET DEFAULT nextval('estado_id_estado_seq'::regclass);


--
-- TOC entry 1781 (class 2604 OID 21401)
-- Dependencies: 1500 1499 1500
-- Name: id_ocupacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ocupacion ALTER COLUMN id_ocupacion SET DEFAULT nextval('ocupacion_id_ocupacion_seq'::regclass);


--
-- TOC entry 1780 (class 2604 OID 21393)
-- Dependencies: 1498 1497 1498
-- Name: id_persona; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE persona ALTER COLUMN id_persona SET DEFAULT nextval('personas_id_persona_seq'::regclass);


--
-- TOC entry 1793 (class 0 OID 21411)
-- Dependencies: 1502
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estado (id_estado, descripcion) FROM stdin;
1	Caracas
2	Aragua
\.


--
-- TOC entry 1792 (class 0 OID 21398)
-- Dependencies: 1500
-- Data for Name: ocupacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ocupacion (id_ocupacion, descripcion) FROM stdin;
1	Estudiante
2	Programador
3	Comunicador
\.


--
-- TOC entry 1791 (class 0 OID 21390)
-- Dependencies: 1498
-- Data for Name: persona; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY persona (id_persona, nombre, apellido, cedula, sexo, fecha_nacimiento, foto, id_ocupacion, id_estado) FROM stdin;
3	Marti	Sifontesxxx	16027738	F	1984-08-21	favicon.png	1	2
2	lenin	hernandez	16027739	M	2017-02-14	favicon.png	2	2
4	Alfonso 	Guerrero	16027737	M	2001-10-01	1316166472_Re-cycle-Triangle.png	3	1
\.


--
-- TOC entry 1788 (class 2606 OID 21416)
-- Dependencies: 1502 1502
-- Name: fkey_estado; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT fkey_estado PRIMARY KEY (id_estado);


--
-- TOC entry 1786 (class 2606 OID 21403)
-- Dependencies: 1500 1500
-- Name: pkey_ocupacion; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ocupacion
    ADD CONSTRAINT pkey_ocupacion PRIMARY KEY (id_ocupacion);


--
-- TOC entry 1784 (class 2606 OID 21395)
-- Dependencies: 1498 1498
-- Name: pkey_persona; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT pkey_persona PRIMARY KEY (id_persona);


--
-- TOC entry 1789 (class 2606 OID 21422)
-- Dependencies: 1502 1498 1787
-- Name: fkey_estado; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT fkey_estado FOREIGN KEY (id_estado) REFERENCES estado(id_estado);


--
-- TOC entry 1790 (class 2606 OID 21427)
-- Dependencies: 1498 1500 1785
-- Name: fkey_ocupacion; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT fkey_ocupacion FOREIGN KEY (id_ocupacion) REFERENCES ocupacion(id_ocupacion);


--
-- TOC entry 1798 (class 0 OID 0)
-- Dependencies: 3
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2011-10-16 07:57:02 VET

--
-- PostgreSQL database dump complete
--


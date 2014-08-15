--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: add_client(integer, character varying, character varying, character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION add_client(_number integer, _name character varying, _last_name character varying, _email character varying, _adress character varying, _city character varying, _country character varying) RETURNS void
    LANGUAGE plpgsql
    AS $$
      BEGIN
        INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        );
      END;
  $$;


ALTER FUNCTION public.add_client(_number integer, _name character varying, _last_name character varying, _email character varying, _adress character varying, _city character varying, _country character varying) OWNER TO postgres;

--
-- Name: del_client(integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION del_client(id integer) RETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$

BEGIN
     
     DELETE FROM clients WHERE clients.id = del_client.id;
     IF FOUND THEN
         RETURN 1;
	ELSE
        RETURN 0;
     END IF;
END;
$$;


ALTER FUNCTION public.del_client(id integer) OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: clients; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE clients (
    id integer NOT NULL,
    number integer,
    name character varying(100) NOT NULL,
    last_name character varying(100) NOT NULL,
    email character varying(200) NOT NULL,
    adress character varying(255) NOT NULL,
    city character varying(150) NOT NULL,
    country character varying(100) NOT NULL
);


ALTER TABLE public.clients OWNER TO postgres;

--
-- Name: list; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW list AS
 SELECT clients.id,
    clients.number,
    clients.name,
    clients.last_name,
    clients.email,
    clients.adress,
    clients.city,
    clients.country
   FROM clients;


ALTER TABLE public.list OWNER TO postgres;

--
-- Name: get_client(integer); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION get_client(id integer) RETURNS SETOF list
    LANGUAGE plpgsql
    AS $$  
    DECLARE  
     rec record;  
    BEGIN  
     FOR rec IN (SELECT * FROM list WHERE list.id = get_client.id LIMIT 1) LOOP  
      RETURN NEXT rec;  
     END LOOP;  
    END;  
    $$;


ALTER FUNCTION public.get_client(id integer) OWNER TO postgres;

--
-- Name: list_all_clients(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION list_all_clients() RETURNS SETOF list
    LANGUAGE plpgsql
    AS $$  
    DECLARE  
     rec record;  
    BEGIN  
     FOR rec IN (SELECT * FROM list ORDER BY id DESC) LOOP  
      RETURN NEXT rec;  
     END LOOP;  
    END;  
    $$;


ALTER FUNCTION public.list_all_clients() OWNER TO postgres;

--
-- Name: update_client(integer, integer, character varying, character varying, character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION update_client(id integer, number integer, name character varying DEFAULT NULL::character varying, last_name character varying DEFAULT NULL::character varying, email character varying DEFAULT NULL::character varying, adress character varying DEFAULT NULL::character varying, city character varying DEFAULT NULL::character varying, country character varying DEFAULT NULL::character varying) RETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$

BEGIN
    UPDATE clients
       SET number        = COALESCE(update_client.number, 	clients.number),
           name          = COALESCE(update_client.name,   	clients.name),
           last_name     = COALESCE(update_client.last_name,    clients.last_name),
           email         = COALESCE(update_client.email,   	clients.email),
           adress        = COALESCE(update_client.adress,   	clients.adress),
           city          = COALESCE(update_client.city,   	clients.city),
           country       = COALESCE(update_client.country,   	clients.country)
     WHERE clients.id = update_client.id;
    RETURN FOUND;
END;
$$;


ALTER FUNCTION public.update_client(id integer, number integer, name character varying, last_name character varying, email character varying, adress character varying, city character varying, country character varying) OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clients_id_seq OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE clients_id_seq OWNED BY clients.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY clients ALTER COLUMN id SET DEFAULT nextval('clients_id_seq'::regclass);


--
-- Data for Name: clients; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY clients (id, number, name, last_name, email, adress, city, country) FROM stdin;
2	4546597	denys1	ark2an	testfg@test.com	afgdress	wargshaw	polfggfgfgfgfgand
13	123456	Ostap	Lazoryak	lazoryak_o@mail.ru	Komarova str. 74/43	Chernivtsi	Ukraine
14	12345	John	Doe	sobaka@gmail.com	Mamaliga town	KOshuleani	Romania
19	4646	Denyssska	arkan	email@test.com	adress--	Warshaw	Poland
1	789	adadd	arkan	test@fdsf.com	adress	warshaw	poland
21	464	fgfdgd	lkjhkh	emwwwail@test.com	dfxdf	dfdgfd	dfdf
\.


--
-- Name: clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clients_id_seq', 21, true);


--
-- Name: client_numb; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clients
    ADD CONSTRAINT client_numb UNIQUE (number);


--
-- Name: clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--


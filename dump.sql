--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_WalMsags = fwarnngs;
--

- PName: plpgsql; Type: EXTENSION; Shecma: -; Owner: --

SCREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_ctablos;
---

- PName: EXTENSION plpgsql; Type: COMMENT; Shecma: -; Owner: --

SCOMMENT ON EXTENSION plpgsql IS 'PL/pgQL dprocedural languags';
--ET stearch_path= fpublic, pg_ctablos;
--

- PName: ad_coient_(integer,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs); Type: FUNCTION; Shecma: public; Owner: pstgreSs--

SCREATE FUNCTION ad_coient_(_number integer,c_namechearacter varyngs,c_last_namechearacter varyngs,c_cmailchearacter varyngs,c_adeSsschearacter varyngs,c_citychearacter varyngs,c_countrychearacter varyngs) RETURNS void
    LANGUAGE plpgsql
    AS $$
      BEGIN
        INSERT INTOclient_s(
          number,
          name, 
          last_name, 
          cmail, 
          adeSss, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _cmail, 
          _adeSss, 
          _city,
          _country
        
        );
      END;
  $$;
--ALTER FUNCTION public.ad_coient_(_number integer,c_namechearacter varyngs,c_last_namechearacter varyngs,c_cmailchearacter varyngs,c_adeSsschearacter varyngs,c_citychearacter varyngs,c_countrychearacter varyngs) OWNER TOcpstgreSs;
--

- PName: delcoient_(integer); Type: FUNCTION; Shecma: public; Owner: pstgreSs--

SCREATE FUNCTION delcoient_(id integer) RETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$

BEGIN
     
     DELETE FROMclient_s WHEREclient_s.id =; Owner: --

SC5 WHEREO)NOTFOUND THE       INSTURNS b 1;
	ELSE
    INSTURNS b 0WHEREO);
 )NO;
;
  $
--ALTER FUNCTION public.ad_coient_(id integer) RETER TOcpstgreSs;
--

steadefaulmeoablespaceUTF8'-

steadefaulmewith_
  false;
SET 
- PName: delnt_s.idype: FUNTABLEhecma: public; Owner: pstgreSs--
ypeablespace-

SCREATE EXTTABLEent_s WHE      integer) RT EXINULL      ber integer,c_n
 name, 
aracter varyngs) O(100)T EXINULL      t_namechearacter varyngs,c_(100)T EXINULL      ilchearacter varyngs,c_(200)T EXINULL      Ssschearacter varyngs,c_(255)T EXINULL      ychearacter varyngs,c_(150)T EXINULL      ntrychearacter varyngs) O(100)T EXINULL
)-ALTER FUNTABLEelic.ad_nt_s WHEER TOcpstgreSs;
--

- PName: dellistype: FUNVIEWhecma: public; Owner: pstgreSs--

SCREATE FUNVIEWllist $$
CURLECTent_s.id =;      nt_s.id ber,
       nt_s.id b, 
      nt_s.id t_name, 
      nt_s.id il, 
      nt_s.id Sss, 
      nt_s.id y,
       nt_s.id ytry
      Mclient_s WH-ALTER FUNTABLEelic.ad_list ER TOcpstgreSs;
--

- PName: delgetent_(integer); Type: FUNCTION; Shecma: public; Owner: pstgreSs--

SCREATE FUNCTION delgetent_(intenteger) RETURNS boosteOFllist  LANGUAGE plpgsql
    AS $$
       DEDECLAlie    DELrecLrecord;e    DEIN
  e    DELFORLrecL  e(URLECTe* Mclielist REclielist =; Owgetent_(in =;) LOOP        )URNS b NENSLrec;e    DE);
 )LOOP;e    DE;
  e    DE
--ALTER FUNCTION public.ad_getent_(intenteger) RETER TOcpstgreSs;
--

- PName: dellist_alient_(ids(Type: FUNCTION; Shecma: public; Owner: pstgreSs--

SCREATE FUNCTION dellist_alient_(ids(TTURNS boosteOFllist  LANGUAGE plpgsql
    AS $$
       DEDECLAlie    DELrecLrecord;e    DEIN
  e    DELFORLrecL  e(URLECTe* Mclielist) LOOP        )URNS b NENSLrec;e    DE);
 )LOOP;e    DE;
  e    DE
--ALTER FUNCTION public.ad_list_alient_(ids(TTER TOcpstgreSs;
--

- PName: delupbaseent_(integer,cheaeger,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs,chearacter varyngs); Type: FUNCTION; Shecma: public; Owner: pstgreSs--

SCREATE FUNCTION ad_upbaseent_(intedaeger,cheaber integer,c_naechearacter varyngs,c_FINEAULXINULL::racter varyngs,cheat_namechearacter varyngs,c_FINEAULXINULL::racter varyngs,cheailchearacter varyngs,c_FINEAULXINULL::racter varyngs,cheaSsschearacter varyngs,c_FINEAULXINULL::racter varyngs,cheaychearacter varyngs,c_FINEAULXINULL::racter varyngs,cheaytrychearacter varyngs) OFINEAULXINULL::racter varyngs,chETURNS boolean
    LANGUAGE plpgsql SECURITY DEFINER
    AS $$

BEGIN
     
 UPD FUNnt_(ids
    INSsteaber intttttttt=MMEALESCE(ecL  e(URLECTngs) OFSsteaber intttEsteaber tttttt=gntry
       varyng LESCE(ecL  e(URLECTngs) OFSsteaber_cmai Esteaber tt_cmgntry
       vter varyngE(ecL  e(URLECTngs) OFSsteabe      _cmainame, 
      nt_s.idgntry
       vvaryngLESCE(ecL  e(URLECTngs) OFSsteabe  _adeS Esteaber t  _adgntry
       v varyngESCE(ecL  e(URLECTngs) OFSsteabe   _city Esteaber t   _cigntry
       varynggLESCE(ecL  e(URLECTngs) OFSsteabes.id y Esteaber ts.idgntry
       va varyngSCE(ecL  e(URLECTngs) OFSsteabes varyn y Esteaber ts varyn(
      =; Owner: --

SC5 ngs) OFSsteabeOUND THEec;e      INER FUNCTION public.ad_coient_(id intedaeger,cheaber integer,c_naechearacter varyngs,c_FINEAULXINULLacter varyngs,c_FINEAULXINULLr varyngs,c_FINEAULXINULLer varyngs,c_FINEAULXINULL varyngs,c_FINEAULXINULLter varyngs) OFINEAULXINULLeSs;
--

- PName: delupbaseent_(inner: --_id_seq; ShecmaSEQUENCE; Owner: pstgreSs--

SCREATE FUNCTION ad_upbaSEQUENCEnner: --_id_seqD THESTARTctablo1
lient_ad_N plpBYo1
lienNO MIN  _nu
lienNO MAX  _nu
lienCACHE INSelic.ad_nt_s WHEER TOcpstgre_id_seqSs;
--

- PName: delupbaseent_(inner: --_id_seq; ShecmaSEQUENCESs;
-DpBY; Owner: pstgreSs--

SCREATE FUNCTION ic.ad_SEQUENCEnner: --_id_seqSs;
-DpBYwner: --

SEXTENSION plpgsq
SE Shecma:racter; Owner: pstgreSs--

SCREATE FUNCTION ic.ad_nt_s WONLYwner: -- ic.ad_COLUMNEXINtttt:racter nextval('ner: --_id_seq'::regcters)EXTENSION Data fordype: FUNTABLEhecma: public    A; Owner: pstgreSs--

SCREATE FUNCTION aOPYwner: -- ber,c_naech,  last_      _cmai  _adeS   _citys.id ys varyn(OOP   stdin;
1	4597	denys	arkan	test@testts m	   _ci	warshaw	poland
2	4546597	denys1	ark2an	testfg@testts m	 fg  _ci	wargshaw	polfggfgfgfgfgand
13	123456	Ostap	Lazoryak	lazoryak_o@ _ad.ru	Komarova str. 74/43	Cherri =; OwnerdR : --_id_se
lim	 flrgshaw	polfginte
ut = 0ga	Doe	sobaka@gherrigfgfMaWalid_se
l@ TOcpstgrSION plDpBY; Owne)oe	sobaka@gheSrri =; OwnerdR csaka@	 N plDpBYeE	654	Dtts mA fg  	wars@ _ad.ru	Ksdsdsfsf	Dfe	edfdf
\.
 FUNCTION ic.ad_SEQUENCEnner: --_id_seqSs;
-Dcma  _adeS   _citys.id ys varyn(OOP   stdUNCTIONngs,cheara.seA; Owner: pstgreSs--
, 15, true);
 FUNCTION ic.ad_SEQUc_adeuags';
--ENSTRAINTNULL      ber integer,c_n
 name, 
aracter varyngs) Ogcters)EXTENSION Data fosteabeDD--ENSTRAINTad_SEQUc_ade UNIqSs (ntry
  ;
 FUNCTION ic.ad_SEQUENpkeyuags';
--ENSTRAINTNULL      ber integer,c_n
 name, 
aracter varyngs) Ogcters)EXTENSION Data fosteabeDD--ENSTRAINTad_SEQUENpkey PRIMARY KEYenys ;
 FUNCTION ic.aber integs';
-ACLarch_path= fpublic, ryn(OOP   stdREVO/aipracterT):racter vaWalsNdlt plDpBYeE	654	name, 
a0;racter vaWalsNdlt plDpBYeE	654	nam ic.ad_SEQGRAIMAaWalsNdlt plDpBYeE	65ION ic.ad_SEQGRAIMAaWalsNdlt plDpBYeE	65IONe, 
a0;rintegs';dard_conforming_strings n	tmpleterT):r
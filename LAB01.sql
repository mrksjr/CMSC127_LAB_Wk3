create database applicants;

create table pdsData (
	csid int not null auto_increment primary key,
	
	/*  personal information*/
	lname varchar (30),
	fname varchar (30),
	nmext varchar (10),
	mname varchar (30),
	
	bdate varchar (10), 
	pbirth varchar (30),
	sex varchar (7),
	cstat varchar (30),
	
	height float,
	weight float,
	btype varchar (3),
	
	gsisno varchar (15),
	pibigno varchar (15),
	phno varchar (15),
	sssno varchar (15),
	tinno varchar (15),
	agemno varchar (15),
	
	ctz varchar (30),
	cntry varchar (30),
	
	/* residential address */
	bhno varchar (30),
	strt varchar (30),
	subd varchar (30),
	brgy varchar (30),
	city varchar (30),
	prov varchar (30),
	zip varchar (5),
	
	/* permanent address */
	pbhno varchar (30),
	pstrt varchar (30),
	psubd varchar (30),
	pbrgy varchar (30),
	pcity varchar (30),
	pprov varchar (30),
	pzip varchar (30),
	
	telno varchar (15),
	mobno varchar (15),
	email varchar (30),
	
	/* family background */
	splname varchar (30),
	spfname varchar (30),
	spnmext varchar (10),
	spmname varchar (30),
	
	spoccup varchar (30),
	spempnm varchar (30),
	spbusadd varchar (45),
	sptelno varchar (15),
	
	flname varchar (30),
	ffname varchar (30),
	fnmext varchar (10),
	fmname varchar (30),
	
	mmdname varchar (30),
	mlname varchar (30),
	mfname varchar (30),
	mmname varchar (30),
	
	chname0 varchar (60),
	chdob0 varchar (15),
	chname1 varchar (60),
	chdob1 varchar (15),
	chname2 varchar (60),
	chdob2 varchar (15),
	chname3 varchar (60),
	chdob3 varchar (15),
	chname4 varchar (60),
	chdob4 varchar (15),
	chname5 varchar (60),
	chdob5 varchar (15),
	chname6 varchar (60),
	chdob6 varchar (15),
	chname7 varchar (60),
	chdob7 varchar (15),
	chname8 varchar (60),
	chdob8 varchar (15),
	chname9 varchar (60),
	chdob9 varchar (15),
	chname10 varchar (60),
	chdob10 varchar (15),
	chname11 varchar (60),
	chdob11 varchar (15),
	
	/* educational background */
	elemsch varchar (50),
	secsch varchar (50),
	vocsch varchar (50),
	collsch varchar (50),
	gradsch varchar (50),
	
	elemdeg varchar (50),
	secdeg varchar (50),
	vocdeg varchar (50),
	colldeg varchar (50),
	graddeg varchar (50),
	
	elemdate0 int,
	secdate0 int,
	vocdate0 int,
	colldate0 int,
	graddate0 int,
	
	elemdate1 int,
	secdate1 int,
	vocdate1 int,
	colldate1 int,
	graddate1 int,
	
	elemlvl varchar (30),
	seclvl varchar (30),
	voclvl varchar (30),
	colllvl varchar (30),
	gradlvl varchar (30),
	
	elemgrad int,
	secgrad int,
	vocgrad int,
	collgrad int,
	gradgrad int,
	
	elemhon varchar (30),
	sechon varchar (30),
	vochon varchar (30),
	collhon varchar (30),
	gradhon varchar (30)
);
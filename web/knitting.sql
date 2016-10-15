
CREATE SEQUENCE public.misc_miscid_seq;

CREATE TABLE public.Misc (
                MiscID INTEGER NOT NULL DEFAULT nextval('public.misc_miscid_seq'),
                MiscName VARCHAR(45) NOT NULL,
                MiscAmount INTEGER NOT NULL,
                CONSTRAINT miscid PRIMARY KEY (MiscID)
);


ALTER SEQUENCE public.misc_miscid_seq OWNED BY public.Misc.MiscID;

CREATE SEQUENCE public.needle_needleid_seq;

CREATE TABLE public.Needle (
                NeedleID INTEGER NOT NULL DEFAULT nextval('public.needle_needleid_seq'),
                NeedleBrand VARCHAR(45),
                NeedleSize DOUBLE PRECISION NOT NULL,
                NeedleAmount INTEGER NOT NULL,
                NeedleType VARCHAR(45) NOT NULL,
                CONSTRAINT needleid PRIMARY KEY (NeedleID)
);


ALTER SEQUENCE public.needle_needleid_seq OWNED BY public.Needle.NeedleID;

CREATE SEQUENCE public.yarn_yarnid_seq;

CREATE TABLE public.Yarn (
                YarnID INTEGER NOT NULL DEFAULT nextval('public.yarn_yarnid_seq'),
                YarnBrand VARCHAR(45),
                YarnAmount INTEGER NOT NULL,
                YarnWeight VARCHAR(45) NOT NULL,
                YarnColor VARCHAR(45) NOT NULL,
                CONSTRAINT yarnid PRIMARY KEY (YarnID)
);


ALTER SEQUENCE public.yarn_yarnid_seq OWNED BY public.Yarn.YarnID;

CREATE SEQUENCE public.project_projectid_seq;

CREATE TABLE public.Project (
                YarnID INTEGER NOT NULL,
                ProjectID INTEGER NOT NULL DEFAULT nextval('public.project_projectid_seq'),
                NeedleID INTEGER NOT NULL,
                MiscID INTEGER NOT NULL,
                ProjectName VARCHAR(45) NOT NULL,
                ProjectStartDate DATE NOT NULL,
                ProjectType VARCHAR(45) NOT NULL,
                CONSTRAINT projectid PRIMARY KEY (YarnID, ProjectID, NeedleID, MiscID)
);


ALTER SEQUENCE public.project_projectid_seq OWNED BY public.Project.ProjectID;

ALTER TABLE public.Project ADD CONSTRAINT misc_project_fk
FOREIGN KEY (MiscID)
REFERENCES public.Misc (MiscID)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.Project ADD CONSTRAINT needle_project_fk
FOREIGN KEY (NeedleID)
REFERENCES public.Needle (NeedleID)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.Project ADD CONSTRAINT yarn_project_fk
FOREIGN KEY (YarnID)
REFERENCES public.Yarn (YarnID)
ON DELETE CASCADE
ON UPDATE NO ACTION
NOT DEFERRABLE;

INSERT INTO public.needle(
	needleid, needlebrand, needlesize, needleamount, needletype)
	VALUES ('1', 'Boye', '13', '2', 'Straight'),
    ('2', 'Takumi', '4', '5', 'Double Pointed'),
     ('3', 'Bates', '8', '1', 'Circular'),
      ('4', 'KnitPicks', '10', '4', 'Straight'),
       ('5', 'Knitters Pride', '6', '2', 'Circular');
       
INSERT INTO public.yarn(
	yarnid, yarnbrand, yarnamount, yarnweight, yarncolor)
	VALUES ('1', 'Lion Brand', '3', 'Worsted', 'Lime Green'),
    ('2', 'Blue Heron Yarns', '5', 'Fingering', 'Violet'),
    ('3', 'Plymouth Yarns', '1', 'Chunky', 'Gray'),
    ('4', 'Plymouth Yarns', '7', 'Sport', 'Light Blue'),
    ('5', 'Lion Brand', '2', 'Eyelash', 'Gold');


INSERT INTO public.needle(
	needleid, needlebrand, needlesize, needleamount, needletype)
	VALUES ('1', 'Boye', '13', '2', 'Straight'),
    ('2', 'Takumi', '4', '5', 'Double Pointed'),
     ('3', 'Bates', '8', '1', 'Circular'),
      ('4', 'KnitPicks', '10', '4', 'Straight'),
       ('5', 'Knitters Pride', '6', '2', 'Circular');
       
INSERT INTO public.project(
	yarnid, projectid, needleid, miscid, projectname, projectstartdate, projecttype)
	VALUES ('1', '1', '3', '1', 'Amanda Birthday Gift', '2015-04-30', 'Cowl'),
    ('2', '2', '2', '1', 'Lace Gloves for Mom', '2016-08-12', 'Handwear');
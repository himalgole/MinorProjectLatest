create table family
(
    fid varchar(12)  NOT NULL,
    head_fname varchar(15) NOT NULL,
    head_mname varchar(15) NOT NULL,
    head_lname varchar(15) NOT NULL,
    Member_nbr int(3) NOT NULL,
    abroad int(2) NOT NULL,
    religion char(15) NOT NULL,
    caste char(15) NOT NULL,
    language_spoken char(15) NOT NULL,
    income int(10) NOT NULL,
    home_ownership char(5) NOT NULL,
    province char(30) NOT NULL,
    district char(30) NOT NULL,
    local_level char(40) NOT NULL,
    village char(40) NOT NULL,
    PRIMARY KEY(fid)
);
create table member(
    fid varchar(12),
    pid varchar(14) NOT NULL,
    gender char(10) NOT NULL,
    f_name varchar(15) NOT NULL,
    m_name varchar(15) NOT NULL,
    l_name varchar(15) NOT NULL,
    profession char(15) NOT NULL,
    education varchar(20) NOT NULL,
    relation char(20) NOT NULL,
    dob varchar(15) NOT NULL,
    PRIMARY KEY(pid),
    FOREIGN KEY(fid) references family(fid)
);
    

 create table death
 (
    fid varchar(12),
    gender char(10) NOT NULL,
    f_name varchar(15) NOT NULL,
    m_name varchar(15) NOT NULL,
    l_name varchar(15) NOT NULL,
    age int(3) NOT NULL,
    cause_of_death varchar(20) NOT NULL,
    FOREIGN KEY(fid) references family(fid)

 );
 create table agriculture
 (
     fid varchar(12),
     land_use varchar(20) NOT NULL,
     land_ownership varchar(10)  NOT NULL,
     ag_income int(10)  NOT NULL,
     buffalo int(2)  NOT NULL,
     sheep int(2)  NOT NULL,
     goat int(2)  NOT NULL,
     pig int(2)  NOT NULL,
     yak int(2)  NOT NULL,
     cow int(2)  NOT NULL,
     maize boolean,
     millet boolean,
     mustard boolean,
     barley boolean,
     wheat boolean,
     sugarcane boolean,
     paddy boolean,
     potato boolean,
     orchard boolean,
     FOREIGN KEY(fid) references family(fid)
 );
 
 create table equipment_vehicle
 (
     fid varchar(12),
     telephone boolean,
     television boolean,
     radio boolean,
     mobile boolean,
     pc boolean,
     internet boolean,
     car_jeep boolean,
     bike boolean,
     bicycle boolean,
     refrigerator boolean,
     washing_machine boolean,
     FOREIGN KEY(fid) references family(fid)
 )
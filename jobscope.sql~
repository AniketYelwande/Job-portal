
drop table jobs;
drop table employers;
drop table employees;
drop table contact;
drop table categories;
drop table applicants;

 create table applicants(
 			a_id serial primary key ,
			a_uid int,
			a_jid int
		       );
select * from applicants;

create table categories(
			cat_id serial primary key,
			cat_nm varchar(30) NOT NULL
		       );
select * from categories;

create table contact(
		     cont_id serial primary key,
		     cont_fnm varchar(30) NOT NULL,
		     cont_email varchar(30) NOT NULL,
		     cont_query varchar(300) NOT NULL
		    );
select * from contact;

create table employees(
		  ee_id serial primary key,
		  ee_fnm varchar(30) NOT NULL unique,
		  ee_pwd varchar(10) NOT NULL unique,
		  ee_gender varchar(10) NOT NULL,
		  ee_email varchar(30) NOT NULL unique,
		  ee_add varchar(300) NOT NULL,
		  ee_phn varchar(10) NOT NULL,
		  ee_mobileno varchar(10) NOT NULL,
		  ee_current_location varchar(20) NOT NULL,
		  ee_annualsalary varchar(15),
		  ee_current_industry varchar(20),
		  ee_qualification varchar(10) not null,
		  ee_profile varchar(300),
	          ee_resume text	 
		 );
select * from employees;

create table employers(
			er_id serial primary key NOT NULL ,
			er_fnm varchar(30) NOT NULL,
		 	er_pwd varchar(10) NOT NULL,
			er_company varchar(30) NOT NULL,
			er_add varchar(100) NOT NULL,
			er_ph varchar(10) NOT NULL,
			er_email varchar(50) NOT NULL,
			er_company_profile varchar(300) not null 
		      );
select * from employers;

create table jobs(
		  j_id serial primary key,
		  j_category varchar(40) not null,
		  j_owner_name varchar(30) not null,
		  j_title varchar(30) not null,
		  j_hours int not null,
		  j_salary varchar(15) not null,
		  j_experience int not null,
		  j_discription varchar(300) not null,
		  j_city varchar(20) not null,
		  j_active int not null default'0'
		 );
select * from jobs;


insert into applicants (a_id,a_uid,a_jid) values (17,'11','16');
insert into applicants (a_id,a_uid,a_jid) values (18,'10','18');
insert into applicants (a_id,a_uid,a_jid) values (19,'10','16');
insert into applicants (a_id,a_uid,a_jid) values (20,'12','19');
insert into applicants (a_id,a_uid,a_jid) values (21,'12','17');

select * from applicants;

insert into categories(cat_id,cat_nm) values(10,'import-export');
insert into categories(cat_id,cat_nm) values(11,'it-software');
insert into categories(cat_id,cat_nm) values(12,'it-hardware');
insert into categories(cat_id,cat_nm) values(14,'banking');
insert into categories(cat_id,cat_nm) values(20,'finance');

select * from categories;


insert into contact(cont_id,cont_fnm,cont_email,cont_query) values(14,'Riddhi','riddhipatel85@gmail.com','xyz');
insert into contact(cont_id,cont_fnm,cont_email,cont_query) values(15,'Arjun','arjunwale45@gmail.com','abc');

select * from contact;

insert into employees values(10,'megha','megha11','f','meghapatel45@gmail.com','"Megha" 2nd floor,Rajkot','7026242512','7458693210','Rajkot','45000','infosys','MBA','xyz');
insert into employees values(11,'darshna','dharshna','f','dharshna_54@gmail.com','"Darshna" Market yard,Rajkot','7026242475','7458852210','Mumbai','35000','TCS','MCA','xyz');
insert into employees values(12,'parth','parth11','m','parth74@gmail.com','Bhivandi,Mumbai','8026242512','8028693210','Mumai','40000','Wipro','BCA','xyz');
insert into employees values(13,'samir','1234567890','m','samir33@gmail.com','Boriwali,Mumbai','7026242412','7458693217','Mumbai','45000','TCS','MBA','xyz');

select * from employees;



insert into employers values(12,'admin','1111111','INFOSYS','Infosys,Mumbai','7026252410','infosys_company@gmail.com','abc');
insert into employers values(13,'rishi','12345678','TCS','Tcs,Mumbai','7026252310','tcs_hr_company@gmail.com','abc');
insert into employers values(14,'sagar','sagar123','INFOSYS','Infosys,Pune','7026252220','infosys_company@gmail.com','abc');
insert into employers values(15,'shiva','Sh4571','Wipro','Wipro,Banglore','7054252410','wipro_manager_company@gmail.com','abc');
insert into employers values(16,'jay','87654321','Mphasis','Mphasis,Mumbai','7045152410','Mphasis_company@gmail.com','abc');

select * from employers;


insert into jobs values(16,'it-software','rishi','Need For Manager','10','40000','2','Manager','Pune','1');
insert into jobs values(17,'it-software','rishi','Need For CA','8','45000','4','CA','Mumbai','1');
insert into jobs values(18,'it-hardware','sagar','Need For Manager','10','34000','2','Manager','Pune','1');
insert into jobs values(19,'import-export','sagar','Need For Trader','12','25000','3','Trader','Rajkot','2');
insert into jobs values(20,'finance','shiva','Need For Assistant','8','35000','3','Assistant','Banglore','5');
insert into jobs values(21,'banking','shiva','Need For Manager','10','45000','5','Manager','Kolkatta','2');
insert into jobs values(22,'import-export','rishi','Need For Assistant','12','30000','1','Assistant','Pune','1');

select * from jobs;


create table ПредметЗадача
(
    КодПрЗ varchar(255),
    НаименованиеПрЗ varchar(255),
    КоличествоСтатКМвПрЗ varchar(255)
);
create table МоделиЗадачи
(
    КодПрЗ varchar(255),
    КодКМ varchar(255),
    constraint PK_МоделиЗадачи_КодПрЗ primary key (КодПрЗ),
    constraint FK_МоделиЗадачи_КодКМ Foreign key (КодКМ) references МоделиЗадачи (КодПрЗ)
);
create table КМ
(
    КодКМ varchar(255),
    РодКМ varchar(255),
    ВидКМс  varchar(255), 
);
create table СоставКмоделиизструктур
(

    КодКМ varchar(255),
    КодСтатСтруктуры  varchar(255),
    КодДинСтруктуры  varchar(255), 
    КодСтруктурыУвязки varchar(255)
);
create table Структуры
(
    КодСтруктуры varchar(255),
    ТипСтруктуры varchar(255),
    РодСтруктуры varchar(255), 
    ВидСтруктуры varchar(255),
    КоличествоЭлементовСтруктуры varchar(255)
);
create table ЭлементСтатСтруктуры 
(
    КодСтруктуры varchar(255),
    КодПК varchar(255), 
    НаименованиеПК varchar(255),
    КлассПК varchar(255),
    ТипПК varchar(255),
    СтатусПК varchar(255),
    ОценкаПК varchar(255),
    ПримечаниеПК varchar(255)
);

create table ЭлементДинСтруктуры
(
    КодСтруктуры varchar(255),
    КодПЗ1 varchar(255), 
    НаименованиеПЗ1 varchar(255),
    СтепеньФормализации varchar(255),
    СтатусПЗ1 varchar(255),
    СтруктурноеСвойствоПЗ1 varchar(255),
    ПримечаниеПЗ1 varchar(255)
);
create table СтруктураУвязкиF6с
(
    КодСтруктуры varchar(255),
    КодПЗ1 varchar(255), 
    СтруктурноеСвойствоПЗ1 varchar(255),
    КодПК varchar(255),
    РольПК varchar(255),
    СтруктурноеСвойствоПК varchar(255),
    ОбъемноеСвойствоПК varchar(255),
    ОсобаяРольПК varchar(255)
);

delete СтруктураУвязкиF6с
where КодПЗ1= '';

update СтруктураУвязкиF6с
set СтруктурноесвойствоПЗ1= ''
where КодПЗ1 ='';

alter table КМ
add КодСтруктуры nvarchar(255)

select * from СтруктураУвязкиF6с
where  КодПЗ1 like 'Z5%'
order by КодПЗ1 desc

select * from СтруктураУвязкиF6с
where  КодПЗ1 like 'Z71%';

select * from СтруктураУвязкиF6с
where  КодПЗ1 like 'Z8%';

select * from СтруктураУвязкиF6с
order by КодПЗ1 asc

select * from ЭлементДинСтруктурыF3c
select * from СтруктураУвязкиF6с
select * from ЭлементСтатСтруктурыF1c
where КодСтруктуры like 'Z8%';

select * 
from МоделиЗадачи inner join КМ
on МоделиЗадачи.КодКМ= КМ.КодКМ


select КМ.ВидКМс,МоделиЗадачи.* 
from МоделиЗадачи inner join КМ
on МоделиЗадачи.КодКМ= КМ.КодКМ
where КМ.ВидКМс='v'

select * 
from СтруктураУвязкиF6с inner join ЭлементСтатСтруктурыF1c
on СтруктураУвязкиF6с.КодПК= ЭлементСтатСтруктурыF1c.КодПК

select ЭлементСтатСтруктурыF1c.НаименованиеПК,СтруктураУвязкиF6с.* 
from СтруктураУвязкиF6с inner join ЭлементСтатСтруктурыF1c
on СтруктураУвязкиF6с.КодПК= ЭлементСтатСтруктурыF1c.КодПК
where ЭлементСтатСтруктурыF1c.НаименованиеПК='Код СЕ'

select e.НаименованиеПК,c6.* 
from СтруктураУвязкиF6с as c6 inner join ЭлементСтатСтруктурыF1c as e
on c6.КодПК=e.КодПК
where e.НаименованиеПК='Код СЕ'
/*
NEXT FILE
*/
create table КМ
(
    КодКМ nvarchar(255),
    РодКМ nvarchar(255),
    ВидКМс  nvarchar(255), 
)

insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-ЦПЗ',N'1',N'v');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z8.11',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z82',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z7.12',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z7.11',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z71',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z53',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z51',N'1',N'c');
insert into КМ
(КодКМ,РодКМ,ВидКМс)
values (N'КМ-Z41',N'1',N'c');

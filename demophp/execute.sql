

create table student (
    id int auto_increment PRIMARY key,
    name varchar(20),
    sex int ,
    age int
)

insert into student (id,name,sex,age) values (1, '张三', 1, 17);


insert into student (name,sex,age) values ('李铁牛', 1, 12);
insert into student (name,sex,age) values ('赵本山', 2, 20);
insert into student (name,sex,age) values ('李开发', 0, 30);
insert into student (name,sex,age) values ('郭庄园', 1, 14);
insert into student (name,sex,age) values ('王大锤', 1, 10);


-- 创建
create table article(
   id int auto_increment PRIMARY key,
    name varchar(20),
    sex int ,
    age int
);

-- 表-修改字段(仅修改字段的其他信息，则可以使用)
alter table data_type_tab modify is_double float(27, 18);

-- 插入
insert into data_type_tab (id, is_float, is_double, is_decimal) values (
    8,
    3.44,
    5.77,
    6.88
);

-- 更新
update from data_type_tab set is_float = 32.88 where id = 6;

select is_float from data_type_tab where is_float < 7;



	#	名字	类型	排序规则	属性	空	默认	注释	额外	操作

名字	类型文档	长度/值	默认	排序规则	属性	空	调整权限文档	A_I	注释
ALTER TABLE `user` CHANGE `id` `id` INT(11) NULL DEFAULT NULL;

update user set id = 3 where age = 30;



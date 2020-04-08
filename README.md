# Sample PHP MVC

## Index
![index](https://user-images.githubusercontent.com/11474426/78806480-e33eae00-79ec-11ea-8edc-a9afb978a7d5.PNG)
<hr>

## Create
![create](https://user-images.githubusercontent.com/11474426/78806511-f5b8e780-79ec-11ea-9c99-b2ae49759824.PNG)
<hr>

## Update
![update](https://user-images.githubusercontent.com/11474426/78806534-fd788c00-79ec-11ea-827a-27d5aca86e50.PNG)
<hr>

# Creating the Database Table
```
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `member` (`id`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin');

ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
```

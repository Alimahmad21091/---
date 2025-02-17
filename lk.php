<?php
 $title=$titlehead="Личный кабинет";
 include "utils/header.php"
?>
<h2>Редактирование профиля</h2>
<form action="update.php" method="post" enctype="multipart/form-data">
    <table><tr><td>
    <label for="surname">Фамилия</label></td><td>
    <input name="surname" value="<?=$res['surname']?>" type="text" maxlength="30" size="20" />
    </td></tr><tr><td>
    <label for="name">Имя</label></td><td>
    <input name="name" value="<?=$res['name']?>" type="text" maxlength="30" size="20" />
    </td></tr><tr><td>
    <label for="email">E-mail</label></td><td>
    <input name="email" value="<?=$res['email']?>" disabled type="text" maxlength="30" size="20" />
	</td></tr><tr><td>
    <label for="regdate">Дата регистрации</label></td><td>
    <input name="regdate" disabled type="text" maxlength="50" size="20"
	value="<?php date_default_timezone_set('UTC'); echo date("d.m.Y (Hч. iмин. sсек., Барн.)", $res['regdate'])?>" />
    </td></tr><tr><td>
    <label for="passwd">Пароль</label></td><td>
    <input name="passwd" type="password" maxlength="50" size="20" />
    </td></tr><tr><td>
    <label for="passwd2">Повторный пароль</label></td><td>
    <input name="passwd2" type="password" maxlength="50" size="20" />
	</td></tr><tr><td>
    <label for="photo">Фото</label></td><td>
    <input name="photo" type="file" size="30" value="<?=$_FILES['photo']['name'];?>"/>
	</td></tr><tr><td>
    <label for="about">О себе</label></td><td>
    <textarea name="about" rows="25" cols="80"><?=$res['about']?></textarea>
	</td></tr><tr><td>
    <label for="position">Статус</label></td><td>
    <select name="position">
		<option value="0" <?php if ($res['position']==0) echo "selected"?>>новичок</option>
		<option value="1" <?php if ($res['position']==1) echo "selected"?>>продвинутый</option>
		<option value="2" <?php if ($res['position']==2) echo "selected"?>>мастер</option>
		<option value="3" <?php if ($res['position']==3) echo "selected"?>>эксперт</option>
		<option value="4" <?php if ($res['position']==4) echo "selected"?>>модератор</option>
		<option value="5" <?php if ($res['position']==5) echo "selected"?>>властелин</option>
	</select>
    </td></tr><tr><td>
    <input type="submit" value="Обновить"></td><td>
    <input type="reset" value="Сбросить"></td></tr>
    </table>
</form>
<?php
 include "utils/footer.php";
?>
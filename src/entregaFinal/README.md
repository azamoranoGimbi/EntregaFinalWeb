#TRABAJO FINAL DE ARQUITECTURA# 
##Nuestro trabajo final consiste en una red social básica, el usuario será capaz de poder registrarse en la web y tener ##su propio espacio.
##La web esta esta realizada con Docker-compose, MySQL y Larabel.
##La base de datos esta formada por dos tablas relacionadas, una es la tabla de usuarios y la tabla de acciones. 
##La primera tabla esta compuesta por la información del usuario como id, correo, rol, etc. La otra tabla esta compuesta ##por las acciones del usuario como texto, audio, video y está relacionada con la tabla usuarios con la id.
##El campo correo es único y debe ser usado para poder registrarse y acceder en la web, junto con el campo password. 
##El campo rol sirve para diferenciar usuarios estándar con usuarios administradores, un usuario al registrarse es ##automáticamente asignado como usuario estándar y solo tiene los privilegios básicos. 
##El usuario administrador, puede borrar los usuarios que desee, normalmente son los usuarios que no respetan las ##políticas de la web.
##La página de login es sencilla, tiene los campos de username, que es el correo del usuario (campo único) y su ##contraseña. 
##Esta la opción de crear una nueva cuenta (registrarse) en el cual tiene los campos de los datos con la opción de ##introducir una imagen de perfil.
##El usuario tiene su muro, donde podrá ver los audios, textos, videos e imágenes que vaya colgando.
##Tendrá acceso a su perfil, que esta compuesto por su descripción personal, la opción de cambiar de contraseña, las ##opciones de perfil. 
##Tiene también el chat para poder hablas con otros usuarios conectados en la web.

##Errores encontrados y corregidos
#El principal error surgido, es que el servidor no encontraba el archivo css, para solucionarlo hemos puesto la ruta de archivo desde index.php, ya que conecta con toda la app.
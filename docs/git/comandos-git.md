# ¿Qué es GIT ?
# -> Guía rápida
#### Git en un software de control de versiones para poder mantener y registrar cambios en nuestro codigo. Permite tambien trabajar de manera colaborativa con otros programadores, recuperar el codigo, volver a una version anterior, ver quien hizo cambios, ver historicos de cambios en el codigo etc. 

# Comandos de GIT (Iniciales)

## Requerimientos 
- Descargar Git  https://git-scm.com/downloads 
- Crear una cuenta en GITHUB https://github.com/

## Configurar GIT
- Cuando somos nuevos en git debemos presentarnos ante Git (presentarnos no significa registrarnos, el registro de la cuenta se hace en github). Para presentarnos ejecutamos los siguientes comandos:

```
git config --global user.name "Your Name"

git config --global user.email "your.email@example.com"

```

## Comandos iniciales
## Crear Repositorio en GITHUB : Este repositorio se crea en la cuenta que dimos de alta en GITHUB

#### Comandos para Subir el repositorio a mi cuenta GIT desde la terminal Visual Studio Code. Escribo estos comandos en la terminal

## Inicializar repositorio local comando para eso:
```
git init
```

## Referencia del repositorio (local) al repositorio remoto
```
git remote add origin https://github.com/gaitangr-gif/backend_laravel.git
```

## Actualizar el repositorio
```
 git add .

 git commit -m "Agregar Comentario de que es lo que se ha actualizado"

 git push origin master

```

## Obtener los nuevos cambios 
```
git pull origin master
```

### SI quiero Clonar el repositorio. Clonar es obtener una copia o descargar una ### copia del repositorio subido,
### ejecuto el comando
```
git clon "direccion del repositorio"
```

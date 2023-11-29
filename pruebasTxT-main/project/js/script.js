let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
document.addEventListener('DOMContentLoaded', () => {
   const darkModeToggle = document.getElementById('dark-mode-toggle-1');
   const body = document.body;

   const currentTheme = localStorage.getItem('theme') || 'light';

   body.classList.add(`${currentTheme}-theme`);

   darkModeToggle.addEventListener('change', () => {
       if (darkModeToggle.checked) {
           // Cambiar al tema oscuro
           body.classList.remove('light');
           body.classList.add('dark');
           // Almacenar la preferencia del usuario en localStorage
           localStorage.setItem('theme', 'dark');
       } else {
           // Cambiar al tema claro
           body.classList.remove('dark');
           body.classList.add('light');
           // Almacenar la preferencia del usuario en localStorage
           localStorage.setItem('theme', 'light');
       }
   });
});




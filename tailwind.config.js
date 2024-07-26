/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // keyframes:{
            //     'anim':{
            //     '0%, 100%':{transform:'translateY(20px)' },
            //     '50%':{tranform:'tanslateY(0)'}
            //     }
            // },
            // annimation:{
            //     'anime':'anim 1.5s ease-in-out infinite'
            // },
            colors: {
                primary : "#25626c",
                backgrounddashboard:"#F6F6F6",
                hoverdashboard:"#EDF0FF",
                coleurdegrade:'linear-gradient(to right, #B7A4F0, #C174EA)',
            }
        },
    },
    plugins: [],
}


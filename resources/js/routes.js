import Gamerooms from './components/Gamerooms.vue';
import CreateGameroom from './components/CreateGameroom.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: Gamerooms
    },
    {
        name: 'create',
        path: '/create',
        component: CreateGameroom
    },
   
];  
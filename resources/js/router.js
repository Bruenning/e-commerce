import { createRouter, createWebHistory } from "vue-router"

const routes = [
    {
        path: "/",
        name: "home",
        meta: {
            title: "Home",
            type: ["site"],
        },
        component: () => import("./Pages/site/Home.vue"),
    },
    {
        path: "/contact",
        name: "contact",
        meta: {
            title: "Contact",
            type: ["site"],
        },
        component: () => import("./Pages/site/Contact.vue"),
    },
    {
        path: "/a/login",
        name: "login",
        meta: {
            title: "Login",
            type: [],
        },
        component: () => import("./Pages/admin/Login.vue"),
    },
    {
        path: "/a",
        name: "dashboard",
        meta: {
            title: "Home",
            type: [],
        },
        component: () => import("./Pages/admin/Home.vue"),
    },
    {
        path: "/:pathMatch(.*)*",
        name: "not-found",
        meta: {
            title: "Not Found",
            type: [],
        },
        component: () => import("./Pages/NotFound.vue"),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router

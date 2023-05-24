const api = axios.create({
    baseURL: 'http://localhost:8000/api',
    timeout: 1000,
    headers: {
        'X-Custom-Header': 'foobar'
    },
    withCredentials: true,
    crossdomain: true,
    validateStatus: function (status) {
        return status >= 200 && status < 300; // default
    },
});

api.interceptors.request.use(function (config) {
    // Do something before request is sent
    config.headers.Authorization = `Bearer ${localStorage.getItem('token')}`;
    return config;
}, function (error) {
    // Do something with request error
    return Promise.reject(error);
});


api.interceptors.response.use(function (response) {
    // Do something with response data
    return response;
}, function (error) {
    if (error.response.status == 401) {
        localStorage.removeItem('token');
        window.location.href = '/login';
    }
    // Do something with response error
    return Promise.reject(error);
});

api.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
api.defaults.headers.common['Content-Type'] = 'application/json';
api.defaults.headers.common['Accept'] = 'application/json';

/**
 * get
 * 
 * @param {string} url
 * @param {object} data
 * @param {object} config
 * @returns {Promise}
 */

api.get = async function (url, config = {}) {
    return await new Promise((resolve, reject) => {
        api.get(url, config)
            .then(response => {
                resolve(response.data);
            })
            .catch(error => {
                reject(error);
            });
    });
}

/**
 * post
 * 
 * @param {string} url
 * @param {object} data
 * @param {object} config
 * @returns {Promise}
 */

api.post = async function (url, data = {}, config = {}) {
    return await new Promise((resolve, reject) => {
        api.post(url, data, config)
            .then(response => {
                resolve(response.data);
            })
            .catch(error => {
                reject(error);
            });
    });
}

/**
 * put
 * 
 * @param {string} url
 * @param {object} data
 * @param {object} config
 * @returns {Promise}
 */

api.put = async function (url, data = {}, config = {}) {
    return await new Promise((resolve, reject) => {
        api.put(url, data, config)
            .then(response => {
                resolve(response.data);
            })
            .catch(error => {
                reject(error);
            });
    });
}

/**
 * delete
 * 
 * @param {string} url
 * @param {object} config
 * @returns {Promise}
 */

api.delete = async function (url, config = {}) {
    return await new Promise((resolve, reject) => {
        api.delete(url, config)
            .then(response => {
                resolve(response.data);
            })
            .catch(error => {
                reject(error);
            });
    });
}

export default api;

import dotenv from 'dotenv';

import App from './app';

dotenv.config();

console.log(process.env.DB_HOST)

const app = new App({
    dbType : process.env.DB_TYPE || 'mongoDB',
    dbHost : process.env.DB_HOST || '',
    dbOptions : process.env.DB_OPTIONS || '',
    dbName : process.env.DB_NAME || '',
    dbPass : process.env.DB_PASS || '',
    dbReplica : process.env.DB_REPLICA || '',
    dbUser : process.env.DB_USER|| '',
});

(async () => {
    await app.start();
})();
import express from 'express';
import { connect } from 'mongoose';

import config from './types/dbconfig.type';
import { parseJson } from './utils/dataUtils';

const app: express.Application = express();
const port: number = Number(process.env.API_PORT) || 3000;


app.use(express.urlencoded({ extended: true }));


process.on('uncaughtException', exitSafely);

process.on('unhandledRejection', exitSafely);

process.on('SIGINT', exitSafely);

export default class App {
    private dbType: string;
    private dbHost: string;
    private dbUser: string;
    private dbPass: string;
    private dbName: string;
    private dbReplica: string;
    private dbOptions: string;

    constructor(config: config) {
        const {
            dbHost, dbName, dbOptions, dbPass, dbReplica, dbType, dbUser } = config;
        this.dbType = dbType;
        this.dbHost = dbHost;
        this.dbOptions = dbOptions;
        this.dbHost = dbHost;
        this.dbName = dbName;
        this.dbPass = dbPass;
        this.dbReplica = dbReplica;
        this.dbUser = dbUser;
    }

    private async connectDB() {
        const uri = `mongodb+srv://${this.dbUser}:${this.dbName}@${this.dbHost}/${this.dbName}?authSource=admin&replicaSet=${this.dbReplica}&readPreference=primary&ssl=true`;
        const connectionResult = await connect(uri, parseJson(this.dbOptions).data);
        return connectionResult;
    }

    async start() {
        try {
            await this.connectDB()
            console.log('connection established with DB');
            app.listen(port, () => {
                console.log(`server listening on ${port}`)
            })
        } catch (e: any) {
            console.log(`server failed to start ${e.message}`);
            exitSafely();
        }
    }
}

function exitSafely() {
    process.exit(0);
}


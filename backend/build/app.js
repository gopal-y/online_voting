var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
import express from 'express';
import { connect } from 'mongoose';
import { parseJson } from './utils/dataUtils';
const app = express();
const port = Number(process.env.API_PORT) || 3000;
app.use(express.urlencoded({ extended: true }));
process.on('uncaughtException', exitSafely);
process.on('unhandledRejection', exitSafely);
process.on('SIGINT', exitSafely);
export default class App {
    constructor(config) {
        const { dbHost, dbName, dbOptions, dbPass, dbReplica, dbType, dbUser } = config;
        this.dbType = dbType;
        this.dbHost = dbHost;
        this.dbOptions = dbOptions;
        this.dbHost = dbHost;
        this.dbName = dbName;
        this.dbPass = dbPass;
        this.dbReplica = dbReplica;
        this.dbUser = dbUser;
    }
    connectDB() {
        return __awaiter(this, void 0, void 0, function* () {
            const uri = `mongodb+srv://${this.dbUser}:${this.dbName}@${this.dbHost}/${this.dbName}?authSource=admin&replicaSet=${this.dbReplica}&readPreference=primary&ssl=true`;
            const connectionResult = yield connect(uri, parseJson(this.dbOptions).data);
            return connectionResult;
        });
    }
    start() {
        return __awaiter(this, void 0, void 0, function* () {
            try {
                yield this.connectDB();
                console.log('connection established with DB');
                app.listen(port, () => {
                    console.log(`server listening on ${port}`);
                });
            }
            catch (e) {
                console.log(`server failed to start ${e.message}`);
                exitSafely();
            }
        });
    }
}
function exitSafely() {
    process.exit(0);
}
//# sourceMappingURL=app.js.map
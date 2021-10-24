var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
import App from './app';
const app = new App({
    dbType: process.env.dbType || '',
    dbHost: process.env.dbHost || '',
    dbOptions: process.env.dbOptions || '',
    dbName: process.env.dbName || '',
    dbPass: process.env.dbPass || '',
    dbReplica: process.env.dbReplica || '',
    dbUser: process.env.dbUser || '',
});
(() => __awaiter(void 0, void 0, void 0, function* () {
    yield app.start();
}))();
//# sourceMappingURL=server.js.map
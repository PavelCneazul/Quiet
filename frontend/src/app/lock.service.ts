import {Injectable} from "@angular/core";
import {Http, Response} from "@angular/http";
import {Observable} from "rxjs";
import 'rxjs/Rx';

@Injectable()
export class LockService {
    constructor(private http: Http) {

    }

    getLocks(): Observable<any> {
        return this.http.get('http://127.0.0.1:8000/api/lock-users')
            .map(
                (response: Response) => {
                    return response.json().locks;
                }
            );
    }
}
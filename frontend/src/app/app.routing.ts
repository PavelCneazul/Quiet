import {RouterModule, Routes} from '@angular/router';
import {LocksComponent} from './locks/locks.component';
import {NewLockComponent} from "./new-lock/new-lock.component";
import {ModuleWithProviders} from "@angular/core";

const APP_ROUTES: Routes = [
    { path: '', component: LocksComponent },
    { path: 'new-lock', component: NewLockComponent }
];

export const routing: ModuleWithProviders = RouterModule.forRoot(APP_ROUTES);
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { LockComponent } from './lock/lock.component';
import { LocksComponent } from './locks/locks.component';
import { NewLockComponent } from './new-lock/new-lock.component';
import {RouterModule} from "@angular/router";
import {routing} from "./app.routing";

@NgModule({
  declarations: [
    AppComponent,
    LockComponent,
    LocksComponent,
    NewLockComponent
  ],
    imports: [
        BrowserModule,
        RouterModule,
        routing,

    ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

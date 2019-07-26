import { Component, OnInit } from '@angular/core';
import {Lock} from '../lock/lock.interface';
import {LockService} from "../lock.service";
import {Response} from "@angular/http";

@Component({
  selector: 'app-locks',
  templateUrl: './locks.component.html',
  styleUrls: ['./locks.component.css']
})
export class LocksComponent implements OnInit {
  locks: Lock[];

  constructor(private lockServcise: LockService) { }

  ngOnInit() {
  }

  onGetLocks() {
    this.lockServcise.getLocks()
        .subscribe(
            (locks: Lock[]) => this.locks = locks,
            (error: Response) => console.log(error)
        );
  }
}

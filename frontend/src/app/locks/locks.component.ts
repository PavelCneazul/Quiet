import { Component, OnInit } from '@angular/core';
import {Lock} from '../lock/lock.interface';

@Component({
  selector: 'app-locks',
  templateUrl: './locks.component.html',
  styleUrls: ['./locks.component.css']
})
export class LocksComponent implements OnInit {
  locks: Lock[];

  constructor() { }

  ngOnInit() {
  }

}

import { Component, OnInit } from '@angular/core';
import {Lock} from './lock.interface';

@Component({
  selector: 'app-lock',
  templateUrl: './lock.component.html',
  styleUrls: ['./lock.component.css']
})
export class LockComponent implements OnInit {
  lock: Lock;
  constructor() { }

  ngOnInit() {
  }

}

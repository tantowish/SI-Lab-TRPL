import './bootstrap';
import 'flowbite';

import { Input, Timepicker, initTE } from 'tw-elements';

initTE({ Input, Timepicker });


const pickerInline2 = document.querySelector("#timepicker-inline-24");
const timepickerMaxMin2 = new te.Timepicker(pickerInline2, { format24:
true, inline: true, });
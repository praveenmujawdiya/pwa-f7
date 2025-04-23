/**
 * Bundled by jsDelivr using Rollup v2.79.2 and Terser v5.39.0.
 * Original file: /npm/stimulus-timeago@4.1.0/dist/stimulus-timeago.mjs
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
import{Controller as e}from"@hotwired/stimulus";import{formatDistanceToNow as i}from"date-fns";class s extends e{initialize(){this.isValid=!0}connect(){this.load(),this.hasRefreshIntervalValue&&this.isValid&&this.startRefreshing()}disconnect(){this.stopRefreshing()}load(){const e=this.datetimeValue,s=Date.parse(e),t={includeSeconds:this.hasIncludeSecondsValue,addSuffix:this.hasAddSuffixValue,locale:this.locale};Number.isNaN(s)&&(this.isValid=!1,console.error(`[stimulus-timeago] Value given in 'data-timeago-datetime' is not a valid date (${e}). Please provide a ISO 8601 compatible datetime string. Displaying given value instead.`)),this.element.dateTime=e,this.element.innerHTML=this.isValid?i(s,t):e}startRefreshing(){this.refreshTimer=setInterval((()=>{this.load()}),this.refreshIntervalValue)}stopRefreshing(){this.refreshTimer&&clearInterval(this.refreshTimer)}}s.values={datetime:String,refreshInterval:Number,includeSeconds:Boolean,addSuffix:Boolean};export{s as default};

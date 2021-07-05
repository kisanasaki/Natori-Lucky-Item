# Natori-Lucky-Item

## 目次
1. 概要
2. 参考にしよう
3. 必要な機能
## 1.概要
 数学者を題材にした診断アプリです。
 開発環境は以下を使用しています。
 - PHP
 - JavaScript
 - bootstrap
 - anime.js

## 2.参考にしよう
- SQL
-> 【SQL入門講座 合併版】SQLの基本をたった1時間で学べます【初心者向けデータベース入門】，https://www.youtube.com/watch?v=v-Mb2voyTbc

- PHP (これとかどうかな？)
-> PHPでメールフォームを作ってみよう【プログラミングクッキング】，https://www.youtube.com/watch?v=tHLnMiRXzNw

- React
->　React入門，https://www.youtube.com/watch?v=HkRQTHRBEbA&list=PLh6V6_7fbbo9HNwl5htJOIV48JUgwWQVS&index=1　必要ないかも
## 3.必要な機能
---
### 1. ホームページ
- アクセスしたらはじめに開くページ
- 他の機能に飛べる(現時点では診断以外comingsoonと表示 )
-
---
### 2. ルーレット
- ルーレット開始ボタンを押す
- ルーレットが回転する演出
- ->一旦保留
---
### 3. 診断機能
- 診断ボタンを押す
- 診断中は下記を使用
https://animejs.com/documentation/#gridStaggering
- 疑似乱数を生成する
- その値を保持したまま診断結果表示ページへ渡す
- 背景は後ろに数式が流れてる
---
### 4. 診断結果表示機能
- 診断機能から渡された値をもとに
- 診断結果をデータベースから取得して表示する
-
---
### 5. ツイートリンク生成
- 画面下部にツイートリンクを生成ボタンがあってツイートできる
---

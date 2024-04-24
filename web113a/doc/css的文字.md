# CSS 的文字

## 文字的顏色

1. 使用`RGB`:
    - 16 進制: `#FF0000` => 紅色、`#00FF00` => 綠色、`#0000FF` => 藍色
    - rgb()
      - rgb(0~255, 0~255, 0~255)。 color: rgb(255,0,0)
      - rgb(0~100%, 0~100%, 0~100%)。 color: rgb(100%, 0%, 0%)
2. 使用`RGBA`:
   rgba(255,0,0,0.5)=>紅色半透明 color: rgb(100%, 0%, 0%, .5)
3. 使用`HSL`:
    - 色相（`Hue`）是色彩的基本屬性，就是平常所說的顏色名稱，如紅色0度、綠色120度、藍色240度等。
    - 飽和度（`Saturation`）是指色彩的純度，越高色彩越純，低則逐漸變灰，取`0-100%`的數值。`0%` 無色、`100%`純色
    - 明度（`Value`）、亮度（`Lightness`）、亮度（`Brightness`），取`0-100%`。`0%`黑色、`100%`白色、一般用`50%`
    - 範例:`hsl(120,100%,50%)`綠色亮度適中
    https://zh.wikipedia.org/zh-tw/HSL%E5%92%8CHSV%E8%89%B2%E5%BD%A9%E7%A9%BA%E9%97%B4
4. 使用HSLA
    例: `hsla(120,100%,50%, 0.5)`

## 文字的對齊

1. 樣式名稱: `text-align`
2. 樣式值:`left`、`right`、`center`、`justify`

## 文字的裝飾

1. 樣式名稱: `text-decoration`
2. 樣式值:`underline`、`overline`、`line-through`、`none`

## 文字的字體
1. 樣式名稱: `font-family`
2. 樣式值:`Helvetica`、`Tahoma`
3. C:\Windows\Fonts
  > `sans-serif`非襯線字、`serif`襯線字
4. 網路字體
  - [typekit](https://fonts.adobe.com/)
  - [Google Font](https://fonts.google.com/)
    網頁適用、無償。提供五種中文字型
  - [Font Squirrel](https://www.fontsquirrel.com/)
  - [justfont](https://store.justfont.com/fonts?gad_source=1&gclid=EAIaIQobChMI49_mpszIhQMVnM0WBR00YgTyEAAYASAAEgKQm_D_BwE)
  - [文鼎雲字庫](https://www.ifontcloud.com/index/index.jsp)
  - [華康威 font](https://dfo.dynacw.com.tw/fontlist/fontlist.aspx)

5. 自創字體
   CSS後HTML允許使用 @font-face 指定嵌入在伺服器的顯示字型
   目前支援的字型檔案格式有: Web Open Font Format(.woff)、True Type Format(.ttf)、Open Type Format(.otf)

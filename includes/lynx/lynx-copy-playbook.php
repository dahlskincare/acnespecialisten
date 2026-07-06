<?php exit; /* intern LYNX-arbetsfil – ej webb-serverad, läs i editor/git */ ?>
# LYNX Copy Playbook — SPLITTRAD 2026-07-06 (denna fil = bara vägvisare)

> **⚠️ Den gamla monolitiska playbooken är uppdelad (ägarbeslut 6 jul: "optimerat för AI — ladda bara det du behöver").** Läs inte allt top-to-bottom längre; gå direkt till rätt fil för din uppgift.

## ▶ BÖRJA HÄR
**Läs `lynx-START.php` först — alltid.** Den har LÄGE (aktuellt läge), en ROUTER (vilken fil för vilken uppgift), de hårda reglerna (1 Claude i taget, save-first, minimal diff) och backloggen (§8/§9) + claims (§12).

## Filkarta (ersätter denna gamla fil)
| Fil | Innehåll | Läs när |
|---|---|---|
| **`lynx-START.php`** | nav · LÄGE · router · 3 regler · backlog §8/§9 · claims §12 | **ALLTID FÖRST** |
| **`lynx-rewrite.php`** | bedömningsmodell §1.1/1.3/1.4 · formel §2 · checklista §3 · husröst §4/4.1/4.2 · ramar+juridik §5 · SEO-skydd §6 · process §7 · skyddsregler §13 | du ska **skriva om en sida** |
| **`lynx-models.php`** | SCORE-modell §1.2 · AIQ-modell §1.5 · mät-loop §10 + SEO-vakt §10.0 · bevakningslista §11.1 | du ska **analysera mätdata / förfina modeller** |
| **`lynx-logg.php`** | arbetslogg §11 (händelsehistorik) | slå upp **"vad/varför beslutades X?"** |
| `lynx-log-arkiv.php` | äldre arkiverade loggposter | djup-historik |
| RÅDATA: `lynx-data.php` | Pages-listan + kolumndefinitioner + sidregister + **filkarta** | inventering/diff |
| RÅDATA: `lynx-score.php` | SCORE-nedbrytningar + SCORE-modellens härledning + online-verifiering | SCORE-analys |
| RÅDATA: `lynx-examples.php` | AI COPY per-block-facit | omskrivning + §1.1-validering |
| RÅDATA: `lynx-questions.php` | AI Overview-frågelistor | §1.5 / Fas 2 |
| RÅDATA: `lynx-gaps.php` | gap-texter | §8.1-gapbeslut |

*(Denna stub behålls så att gamla `§`-referenser och "läs playbooken"-vanan leder rätt. §-numreringen är bevarad i de nya filerna.)*

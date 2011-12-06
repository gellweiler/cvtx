\documentclass[a4paper, 12pt, pagesize, halfparskip]{scrartcl}
\usepackage[T1]{fontenc}
\usepackage{lmodern}
\usepackage[utf8x]{inputenc}
\usepackage[ngerman]{babel}
\usepackage{fixltx2e}
%\usepackage[onehalfspacing]{setspace}
\usepackage{lineno}
\usepackage{tabularx}
%\usepackage{calc}
\usepackage{scrpage2}

\sloppy

\pagestyle{scrheadings}
\ohead{<?php cvtx_kuerzel($post); ?> <?php cvtx_titel($post); ?>}
\setheadsepline{0.4pt}

\begin{document}

\shorthandoff{"}

\thispagestyle{empty}

\begin{flushright}
 \textbf{\large <?php cvtx_name($post); ?>}\\
 <?php cvtx_beschreibung($post); ?>
\end{flushright}

%\newcommand*\adjust{\setlength\hsize{\textwidth-2\tabcolsep}}
\begin{tabularx}{\textwidth}{|lX|}
    \hline
                                                &                                                                           \\
%    \multicolumn{2}{|>{\adjust}X|}{\textbf{\LARGE <?php cvtx_kuerzel($post); ?>} \textbf{\large <?php cvtx_top_titel($post); ?>}}     \\
    \textbf{\LARGE <?php cvtx_kuerzel($post); ?>}    &   \textbf{\large <?php cvtx_top_titel($post); ?>}                              \\
                                                &                                                                           \\
    AntragstellerInnen:                         &   <?php cvtx_antragsteller($post); ?>                                          \\
                                                &                                                                           \\
    Gegenstand:                                 &   <?php cvtx_top_titel($post); ?> (<?php cvtx_top_kuerzel($post); ?>)               \\
                                                &                                                                           \\
    Anmerkungen:                                &   <?php cvtx_info($post); ?>                                                   \\
                                                &                                                                           \\
    \hline
\end{tabularx}

\section*{<?php cvtx_titel($post); ?>}

\begin{linenumbers}
%\modulolinenumbers[5]
<?php cvtx_antragstext($post); ?>
\end{linenumbers}

%\textbf{Begründung:}\\
\subsection*{Begründung}
<?php cvtx_begruendung($post); ?>

\end{document}